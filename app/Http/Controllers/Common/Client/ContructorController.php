<?php

namespace App\Http\Controllers\Common\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Str;
use App\Models\{
    ContructorModel
};
use Illuminate\Support\Facades\Redirect;

class ContructorController extends Controller
{

    public function test(){
        return "hi";
    }
    
    public function index(){
        $found = ContructorModel::where('comp_uid', Auth::user()->id)->get();

        if(count($found) == 0):

        $data['page']       =  "be_contructor";
        $data['js']         =  $this->js_file();
        $data['css']        =  $this->css_file();

        return view('client.pages.contructor.index')->with('data', $data);

        else:
            return Redirect::to('/users/contructor/message');
        endif;
    }

    public function listContructor(){

        $cont = new ContructorModel;

        $listContructor = $cont->getList();

        $totalGroup = count($listContructor);
        $perPage = 5;
        $page = Paginator::resolveCurrentPage('page');
    
        $listContructor = new LengthAwarePaginator($listContructor->forPage($page, $perPage), $totalGroup, $perPage, $page, [
            'path' => Paginator::resolveCurrentPath(),
            'pageName' => 'page',
            'project_count' => count($listContructor)
        ]);

        $data['page']       =  "list";
        $data['js']         =  $this->js_file();
        $data['css']        =  $this->css_file();
        $data['list']       =  $listContructor;

        return view('client.pages.contructor.index')->with('data', $data);
    }

    public function selected($slug){
        $cont = new ContructorModel;

        $check = $cont->getSelected($slug);

        if($check){
            $data['page']       =  "selected";
            $data['js']         =  $this->js_file();
            $data['css']        =  $this->css_file();
            $data['contructor'] =  $check;
    
            return view('client.pages.contructor.index')->with('data', $data);
        }else{
            return Redirect::to('users/contructor/list');
        }


    }

    public function message(){

        $found = ContructorModel::where('comp_uid', Auth::user()->id)->whereNotIn('status', ['approved'])->get();

        if(count($found) != 0):
        $data['page']       =  "applied";
        $data['js']         =  $this->js_file();
        $data['css']        =  $this->css_file();

            return view('client.pages.contructor.index')->with('data', $data);
        else:
            return Redirect::to('/');
        endif;
    }

    public function applied(Request $request){
        

        $data = [
            'comp_uid'                  => Auth::user()->id,
            'comp_name'                 => $request->comp_name,
            'comp_slug'                 => Str::slug($request->comp_name,"-"),
            'comp_email'                => $request->comp_email,
            'comp_contact'              => $request->comp_num,
            'comp_address'              => $request->comp_address,
            'comp_desc'                 => $request->comp_desc,
            'status'                    => 'pending'
        ];

        $query = ContructorModel::updateOrCreate(['comp_uid' => Auth::user()->id], $data);
        if($query){
            return responseSuccess('Price Successfully Loaded!',[]);
        }else{
            return responseFail('Something Wrong!');
        }
    }

    // public function sumbitContact(Request $request){
    //         if(Auth::check()){
    //         $data = [
    //             'user_id'   => Auth::user()->id,
    //             'email'   => Auth::user()->email,
    //             'full_name' => Auth::user()->fname.' '.Auth::user()->lname,
    //             'message'   => $request->message,
    //             'phone_no'  =>  Auth::user()->contact,
    //             'status' => 'sent',
    //         ];

    //         $created_contact = ContactUsModel::updateOrCreate(['message' => $request->message],$data);

    //         $template = 'contact_message';
    //         $full_name = Auth::user()->fname.' '.Auth::user()->lname;
    //         if($created_contact){
    //             $test = new Mail($template, "realstate.myhouse@gmail.com", [
    //                 'subject'   => $full_name." Made A Contact Message",
    //                 'title'     => $full_name." Made A Contact Message",
    //                 'client'     => $full_name,
    //                 'message'    => $request->message,
    //                 'sender'     => Auth::user()->email,
    //             ]);
    //         }


    //     }

    //     return responseSuccess('Message Sent to Customer Service',['test' => $test]);
    // }

    public function js_file(){
        $data = [
            'jquery-2.2.3.min.js',
            'jquery-ui/jquery-ui-1.12.0.min.js',
            'bootstrap.min.js',
            'inputmask/jquery.inputmask.bundle.js',
            'datatables.net/jquery.dataTables.min.js',
            'datatables.net-bs4/js/dataTables.bootstrap4.js',
            'owl.carousel.min.js',
            'owl-1.3.2/owl.carousel.min.js',
            'wow.min.js',
            'typed.min.js',
            'jquery.nouislider.min.js',
            'jquery.mobile.custom.min.js',
            'map-script.js',
            'data-table.js',
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
            'dataTables.bootstrap4.css',
            'jquery.nouislider.min.css',
            'animate.min.css',
            'font-awesome.min.css',
            'flaticons/font/flaticon.css',
            'style.css',
            'badge.css',
            'header-menu-responsive.css',
            'responsive.css',
            'code_field.css'
            
        ];

        return $data;
    }
}
