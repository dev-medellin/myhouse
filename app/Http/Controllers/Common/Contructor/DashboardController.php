<?php

namespace App\Http\Controllers\Common\Contructor;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\ProjectModel;
use App\Models\TestimonyModel;
use App\Models\WishListModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function index(){
        $page = 'project';
            $data['js']     =  $this->js_file();
            $data['css']    =  $this->css_file();

        return view('contructor.pages.dashboard.index')->with('data' ,$data);
    }

    public function get_chart(){

        $year = date('Y');

        $query = ProjectModel::selectRaw("COUNT(*) as total,DATE_FORMAT(created_at,'%b') as month_name,DATE_FORMAT(created_at,'%m') as month,YEAR(created_at) as year")
                                ->where('post_by', '=', Auth::user()->id)
                                ->whereYear("created_at","=",$year)
                                ->groupBy("month")
                                ->get();

        $query_user = User::selectRaw("COUNT(*) as total,DATE_FORMAT(created_at,'%b') as month_name,DATE_FORMAT(created_at,'%m') as month,YEAR(created_at) as year")
                                ->whereYear("created_at","=",$year)
                                ->groupBy("month")
                                ->get();
        $month_name = null;
        $count = WishListModel::get();
        $count_user = User::get();
        $totaltestimony = TestimonyModel::get();
        $count_wish = WishListModel::get();
        $count_project = ProjectModel::where('post_by','=', Auth::user()->id)->get();
        foreach($query as $key){
            $month_name[] = $key->month_name;
        }
            
        for($m=1;$m <= 12; $m++){
            $month[] = date('M', mktime(0,0,0,$m,1,date('Y')));
            $check_month[] = date('M', mktime(0,0,0,$m,1,date('Y')));
        }
        $data = [
            'month'       => $month,
            'query_month' => $month_name,
            'res'         => $query,
            'total_testimony' => count($totaltestimony),
            'total_count' => count($count),
            'total_proj'  => count($count_project),
            'total_count_user' => count($count_user),
            'total_count_wish' => count($count_wish),
            'user_count'  => $query_user
        ];

        return responseSuccess('Project Added Successfully',$data);
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
            'plugins/font-awesome/css/font-awesome.min.css',
            'plugins/ti-icons/css/themify-icons.css',
            'plugins/perfect-scrollbar/perfect-scrollbar.css',
            'plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css',
            'plugins/jquery-toast-plugin/jquery.toast.min.css',
            'app.css',
        ];

        return $data;
    }
}
