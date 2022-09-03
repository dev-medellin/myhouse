<?php

namespace App\Http\Controllers\Common\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //

    public function index(){
        $data['page'] = 'project';

        $data['js']     =  $this->js_file();
        $data['css']    =  $this->css_file();

    return view('admin.pages.projects.index')->with('data' ,$data);
}

public function js_file(){
    $data = [
        'app.js',
        'plugins/perfect-scrollbar/perfect-scrollbar.min.js',
        'plugins/datatables.net/jquery.dataTables.min.js',
        'plugins/datatables.net-bs4/js/dataTables.bootstrap4.js',
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
