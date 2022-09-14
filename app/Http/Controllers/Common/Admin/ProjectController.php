<?php

namespace App\Http\Controllers\Common\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectModel as Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //

    public function index(){
        $data['page'] = "main";

        $data['js']         =  $this->js_file();
        $data['css']        =  $this->css_file();
        $data['projects']   =  Project::select('projects.*','project_type.type as type')
                                        ->leftJoin('project_type', 'project_type.id', '=', 'projects.proj_type')
                                        ->get();

         return view('admin.pages.projects.index')->with('data' ,$data);

    }

    public function insertProj(Request $request){
        $data = [
            'proj_name'             => $request->proj_name,
            'proj_area'             => $request->proj_area,
            'proj_type'             => $request->proj_type,
            'status'                => 'inactive',
            'proj_description'      => $request->proj_desc
        ];

       $query = Project::updateOrCreate(['proj_name' => $request->proj_name],$data);
       if($query){
        return responseSuccess('Project Added Successfully');
       }else{
        return responseFail('Data not found!');
       }

    }

    public function editProj($id){
        $data['page'] = 'edit';
        $data['js']         =  $this->js_file();
        $data['css']        =  $this->css_file();
        return view('admin.pages.projects.index')->with('data' ,$data);
    }

    public function js_file(){
        $data = [
            'app.js',
            'plugins/perfect-scrollbar/perfect-scrollbar.min.js',
            'plugins/datatables.net/jquery.dataTables.min.js',
            'plugins/datatables.net-bs4/js/dataTables.bootstrap4.js',
            'js/inputmask/jquery.inputmask.bundle.js',
            'js/off-canvas.js',
            'js/hoverable-collapse.js',
            'js/misc.js',
            'js/settings.js',
            'js/todolist.js',
            'js/data-table.js',
        ];

        return $data;
    }

    public function css_file(){
        $data = [
            'plugins/%40mdi/font/css/materialdesignicons.min.css',
            'plugins/ti-icons/css/themify-icons.css',
            'plugins/perfect-scrollbar/perfect-scrollbar.css',
            'plugins/datatables.net-bs4/css/dataTables.bootstrap4.css',
            'app.css',
        ];

        return $data;
    }
}
