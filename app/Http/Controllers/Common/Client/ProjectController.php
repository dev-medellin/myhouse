<?php

namespace App\Http\Controllers\Common\Client;

use App\Http\Controllers\Controller;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use App\Models\WishListModel;
use Illuminate\Http\Request;
use Auth;
use App\Models\{
    MaterialModel                   as MM,
    ProjectImageModel               as PIM,
    ProjectModel                    as Project,
};
use Illuminate\Support\Facades\Redirect;

class ProjectController extends Controller
{
    //
    public $data = [];

    public function index(Request $request){
            // if ($request->has('bed_room') || $request->has('bath_room') || $request->has('stories') || $request->has('price_min') || $request->has('price_max')) {
            //     $projects           = Project::paginate(6);
            //     $links = Project::orderBy('created_at', 'desc')->simplePaginate(6);
            //     $data['links'] = $links;
            //     $projects->appends($request->except('page'));
            // }else{
            //     $projects           = Project::paginate(6);
            //     $links = Project::orderBy('created_at', 'desc')->simplePaginate(6);
            //     $data['links'] = $links;
            // }
            $projects  = Project::select("*")
                            ->when($request->has('bed_room'), function ($query) use ($request) {
                               if($request->bed_room >= 6){
                                $query->where('bed_room','>',5);
                               }else{
                                $query->where('bed_room', $request->bed_room);
                               }
                            })
                            ->when($request->has('bath_room'), function ($query) use ($request) {
                                if($request->bath_room >= 6){
                                    $query->where('bath_room','>',5);
                                   }else{
                                    $query->where('bath_room', $request->bath_room);
                                   }
                            })
                            ->when($request->has('stories'), function ($query) use ($request) {
                                if($request->stories >= 6){
                                    $query->where('stories','>',5);
                                   }else{
                                    $query->where('stories', $request->stories);
                                   }
                            })
                            ->when($request->has('price_min') && $request->has('price_max'), function ($query) use ($request) {
                                $price_min = str_replace(str_split(',₱'), '',$request->price_min);
                                $price_max = str_replace(str_split(',₱'), '',$request->price_max);
                                $query->whereBetween('proj_est_price',[$price_min, $price_max+1]);
                                // $query->where('')
                            })
                            ->where('status',"active")
                            ->where('thumbnail',"!=","")
                            ->get();

                            if ( count($projects) == 0 ) {
                                // $projects  = Project::select("*")->where('status','active')->get();
                            }

                            $totalGroup = count($projects);
                            $perPage = 6;
                            $page = Paginator::resolveCurrentPage('page');
                        
                            $projects = new LengthAwarePaginator($projects->forPage($page, $perPage), $totalGroup, $perPage, $page, [
                                'path' => Paginator::resolveCurrentPath(),
                                'pageName' => 'page',
                                'project_count' => count($projects)
                            ]);

                            // $projects = $projects->paginate(6);
                            
                            // $links = Project::orderBy('created_at', 'desc')->simplePaginate(6);
                            // $data['links'] = $links;

            // $projects           = Project::get();
            $data['page']       =  "project";
            $data['projects']   =  $projects;
            $data['js']         =  $this->js_file();
            $data['css']        =  $this->css_file();

        return view('client.pages.projects.index')->with('data', $data);
    }

    public function selected($slug){
        $queryProj = Project::where('proj_slug',$slug)->first();
        $user_id   = Auth::check() != null ? Auth::user()->id : '';
        $wish = Auth::check() ? WishListModel::where('user_id', $user_id) : null;
        if(Auth::check()){
            $wish = WishListModel::where('proj_id',$queryProj->id)->where('user_id',$user_id)->first();
        }
        if($queryProj){
            $data['materials']  = MM::where('proj_id',$queryProj->id)->first();
            $data['project']    = $queryProj;
            $data['wish']       = $wish != null ? true : false;
            $data['image']      = PIM::where('proj_id',$queryProj->id)->get();
            $data['page']       = "project";
            $data['slugs']      =  $queryProj->project_slug;
            $data['js']         =  $this->js_file();
            $data['css']        =  $this->css_file();
    
            return view('client.pages.projects.selected.index')->with('data', $data);
        }else{
            return Redirect::to('projects');
        }
    }

    public function getPrice(){
        $priceMin = Project::where('status','active')->min('proj_est_price');
        $priceMax = Project::where('status','active')->max('proj_est_price');

        if($priceMax < $priceMin){
            $price_min_edited = $priceMax;
            $price_max_edited = $priceMin;
        }else{
            $price_max_edited = $priceMax;
            $price_min_edited = $priceMin;
        }
        return responseSuccess('Price Successfully Loaded!',['priceMin' => $price_min_edited, 'priceMax' => $price_max_edited]);
    }

    public function js_file(){
        $data = [
            'jquery-2.2.3.min.js',
            'jquery-ui/jquery-ui-1.12.0.min.js',
            'bootstrap.min.js',
            'inputmask/jquery.inputmask.bundle.js',
            'owl.carousel.min.js',
            'owl-1.3.2/owl.carousel.min.js',
            'wow.min.js',
            'typed.min.js',
            'jquery.nouislider.min.js',
            'jquery.mobile.custom.min.js',
            'map-script.js',
            'menu.js',
            'custom.js',
        ];

        return $data;
    }

    public function css_file(){
        $data = [
            'bootstrap.min.css',
            'owl.carousel.css',
            'owl.theme.default.css',
            'jquery-ui-css/jquery-ui-1.12.0.min.css',
            'jquery.nouislider.min.css',
            'animate.min.css',
            'font-awesome.min.css',
            'flaticons\font\flaticon.css',
            'style.css',
            'header-menu-responsive.css',
            'responsive.css',
            'code_field.css'
        ];

        return $data;
    }
}
