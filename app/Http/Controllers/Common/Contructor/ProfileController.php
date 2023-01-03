<?php

namespace App\Http\Controllers\Common\Contructor;

use App\Http\Controllers\Controller;
use App\Models\ContructorModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Image;

class ProfileController extends Controller
{
    //

    public function index(){
        $cons = new ContructorModel;
        $data['page'] = "profile";

        $data['js']         =  $this->js_file();
        $data['css']        =  $this->css_file();
        $data['self']       =  $cons->getSelf();

         return view('contructor.pages.profile.index')->with('data' ,$data);
    }


    public function updateProfile(Request $request){
        $cons = new ContructorModel;

        $contruct = $cons->getSelf();
        $profile = $contruct->comp_profile;
        $watermark = $contruct->comp_watermark;

        $data = [
            'comp_name'             => $request->comp_name,
            'comp_slug'             => Str::slug($request->comp_name,"-"),
            'comp_email'            => $request->comp_email,
            'comp_desc'             => $request->comp_desc,
            'comp_contact'          => $request->comp_num,
            'comp_address'          => $request->comp_address,
        ];

        
        if($request->has('comp_prof_file')){
            $image = $request->file('comp_prof_file');
            $name = Str::slug($request->input('comp_prof_file')).'_'.time();
            $folder = public_path().'/uploads/profiles/';
            $fileName = $name. '.' . $image->getClientOriginalExtension();
            $image_name = $image->move($folder,$fileName);

            $profile = $fileName;

            $data = [
                'comp_name'             => $request->comp_name,
                'comp_email'            => $request->comp_email,
                'comp_desc'             => $request->comp_desc,
                'comp_contact'          => $request->comp_num,
                'comp_address'          => $request->comp_address,
                'comp_profile'          => $profile,
            ];

        }

        if($request->has('water_mark_file')){
            $image = $request->file('water_mark_file');
            $name = Str::slug($request->input('water_mark_file')).'_'.time();
            $folder = public_path().'/uploads/watermarks/';
            $fileName = $name. '.' . $image->getClientOriginalExtension();
            $image_name = $image->move($folder,$fileName);

            $watermark = $fileName;
            
            $data = [
                'comp_name'             => $request->comp_name,
                'comp_email'            => $request->comp_email,
                'comp_desc'             => $request->comp_desc,
                'comp_contact'          => $request->comp_num,
                'comp_address'          => $request->comp_address,
                'comp_profile'          => $profile,
                'comp_watermark'        => $watermark,
            ];
        }

        $query = ContructorModel::updateOrCreate(['comp_uid' => Auth::user()->id,'status' => 'approved'],$data);

        if($query){
            return responseSuccess('Profile Updated Successfully',$data);
        }else{
            return responseFail('Something went wrong!');
        }

    }

    public function testImage(){
        $waterMarkUrl = Image::make(public_path('images/watermark.png'))->resize(1000, 1000, function($constraint)
        {
            $constraint->aspectRatio();
        });
        // $canvas = Image::canvas(1000, 1000);
        $image  = Image::make(public_path('images/pic.png'))->resize(1000, 1000, function($constraint)
        {
            $constraint->aspectRatio();
        });

        $image->insert($waterMarkUrl, 'center');
        $image->save(public_path('images/pic-new.png'));

        return "hi";
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
            'js/file-upload.js'
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
