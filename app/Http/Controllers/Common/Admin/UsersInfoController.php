<?php

namespace App\Http\Controllers\Common\Admin;

use App\Http\Controllers\Controller;
use App\Models\UsersModel;
use Illuminate\Http\Request;

class UsersInfoController extends Controller
{
    //

    public function index(){
        $usermodel = new UsersModel;
        $data['page'] = "main";

        $data['users_list'] = $usermodel->getUsersInfo();
        $data['js']         =  $this->js_file();
        $data['css']        =  $this->css_file();

         return view('admin.pages.users.index')->with('data' ,$data);

    }

    public function editUsers($id){
        $data['page'] = "selected_user";

        $usermodel = new UsersModel;

        $data['users_info'] = $usermodel->getUsersWishInfo($id);
        $data['js']         =  $this->js_file();
        $data['css']        =  $this->css_file();

         return view('admin.pages.users.index')->with('data' ,$data);
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
