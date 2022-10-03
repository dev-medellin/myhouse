<?php

namespace App\Http\Controllers\Common\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
       public $data = [];

    public function index(){
        $page = 'project';
            $data['js']     =  $this->js_file();
            $data['css']    =  $this->css_file();

        return view('admin.pages.dashboard.index')->with('data' ,$data);
    }

    public function js_file(){
        $data = [
            'app.js',
            'plugins/perfect-scrollbar/perfect-scrollbar.min.js',
            'plugins/chartjs/chart.min.js',
            'plugins/jquery-sparkline/jquery.sparkline.min.js',
            'plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js',
            'js/off-canvas.js',
            'js/hoverable-collapse.js',
            'js/settings.js',
            'js/misc.js',
            'js/todolist.js',
            'js/functional.js',
            'js/dashboard.js'
        ];

        return $data;
    }

    public function css_file(){
        $data = [
            'plugins/%40mdi/font/css/materialdesignicons.min.css',
            'plugins/ti-icons/css/themify-icons.css',
            'plugins/perfect-scrollbar/perfect-scrollbar.css',
            'plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css',
            'plugins/jquery-toast-plugin/jquery.toast.min.css',
            'app.css',
        ];

        return $data;
    }
}
