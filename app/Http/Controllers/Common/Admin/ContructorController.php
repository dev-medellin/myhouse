<?php

namespace App\Http\Controllers\Common\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContructorModel;
use App\Models\UsersModel;
use Illuminate\Http\Request;

class ContructorController extends Controller
{
    //

    public function index(){
        $data['page'] = "main";

        $testi = new ContructorModel;

        $data['contructors'] =$testi->getContructors();
        
        $data['js']         =  $this->js_file();
        $data['css']        =  $this->css_file();

         return view('admin.pages.contructors.index')->with('data' ,$data);

    }

    public function updateTestStatus(Request $request){
        $query = ContructorModel::where('id',$request->tesID)->update(['status' => $request->status]);
        if($query &&  $request->status == "approved"){
            UsersModel::where('id',$request->uid)->update(['role' => 2]);
        }
        if($query &&  $request->status == "pending" || $query &&  $request->status == "declined"){
            UsersModel::where('id',$request->uid)->update(['role' => 0]);
        }

        if($query){
         return responseSuccess('Application Successfully Updated');
        }else{
         return responseFail('Data not found!');
        }
    }

    public function UpdateDeclined(){
        ContructorModel::where('status','declined')->delete();
    }


    public function js_file(){
        $data = [
            'app.js',
            'plugins/dropzone/dropzone.min.js',
            'plugins/summernote/summernote-bs4.min.js',
            'plugins/perfect-scrollbar/perfect-scrollbar.min.js',
            'plugins/datatables.net/jquery.dataTables.min.js',
            'plugins/datatables.net-bs4/js/dataTables.bootstrap4.js',
            'plugins/jquery-toast-plugin/jquery.toast.min.js',
            'js/inputmask/jquery.inputmask.bundle.js',
            'plugins/sweetalert/sweetalert.min.js',
            'js/off-canvas.js',
            'js/hoverable-collapse.js',
            'js/misc.js',
            'js/settings.js',
            'js/inputmaskset.js',
            'js/todolist.js',
            'js/data-table.js',
            'js/functional.js',
            'js/summernote.js',
            'js/dropzone.js',
        ];

        return $data;
    }

    public function css_file(){
        $data = [
            'plugins/summernote/summernote-bs4.css',
            'plugins/font-awesome/css/font-awesome.min.css',
            'plugins/flaticons/font/flaticon.css',
            'plugins/ti-icons/css/themify-icons.css',
            'plugins/perfect-scrollbar/perfect-scrollbar.css',
            'plugins/datatables.net-bs4/css/dataTables.bootstrap4.css',
            'plugins/dropzone/dropzone.min.css',
            'plugins/jquery-toast-plugin/jquery.toast.min.css',
            'app.css',
            'style.css'
        ];

        return $data;
    }
}
