<?php

namespace App\Http\Controllers\Common\Admin;

use App\Http\Controllers\Controller;
use App\Models\UsersModel;
use App\Models\WishListModel;
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
        $favorite = WishListModel::select('user_wishlist.*','projects.*')
        ->leftJoin('projects','projects.id','user_wishlist.proj_id')
        ->where('user_wishlist.user_id',$id)
        ->where('projects.status','active')
        ->get();

        $data['users_info'] = $usermodel->getUsersWishInfo($id);
        $data['favorite']   =  $favorite;
        $data['js']         =  $this->js_file();
        $data['css']        =  $this->css_file();

         return view('admin.pages.users.index')->with('data' ,$data);
    }

    public function updateInfo(Request $request){

        $data = [
            'email'             => ($request->email == '' ? null : $request->email),
            'contact'           => ($request->phone == '' ? null : $request->phone),
            'fname'             => ($request->fname == '' ? null : $request->fname),
            'lname'             => ($request->lname == '' ? null : $request->lname),
        ];

        $query = UsersModel::where('id',$request->user_id)
                             ->where($data)
                             ->get();

        if($query->isEmpty()){
            UsersModel::where('id',$request->user_id)->update($data);
            return responseSuccess('Information Updated Successfully!');
        }else{
            return responseFail('Update Failed!, you don`t have any changes on data!');
        }
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
