<?php

namespace App\Http\Controllers\Common\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
            if ($request->has('bed_room') || $request->has('bath_room') || $request->has('bath_room') || $request->has('price_min') || $request->has('price_max')) {
                $projects           = Project::paginate(3);
                $links = Project::orderBy('created_at', 'desc')->simplePaginate(3);
                $data['links'] = $links;
            }else{
                $projects           = Project::get();
            }
            // $projects           = Project::get();
            $data['page']       =  "project";
            $data['projects']   =  $projects;
            $data['js']         =  $this->js_file();
            $data['css']        =  $this->css_file();

        return view('client.pages.projects.index')->with('data', $data);
    }

    public function selected($slug){
        $queryProj = Project::where('proj_slug',$slug)->first();
        if($queryProj){
            $data['materials']  = MM::where('proj_id',$queryProj->id)->first();
            $data['project']    = $queryProj;
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

    public function js_file(){
        $data = [
            'jquery-2.2.3.min.js',
            'jquery-ui/jquery-ui-1.12.0.min.js',
            'bootstrap.min.js',
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
