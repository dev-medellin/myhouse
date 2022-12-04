<?php

namespace App\Http\Controllers\Common\Client;

use App\Http\Controllers\Controller;
use App\Models\TestimonyModel;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //

    public function index(){
        $testi = new TestimonyModel;
        $data['page']       =  "about";
        $data['testimony'] = $testi->getTestimonial();
        $data['js']         =  $this->js_file();
        $data['css']        =  $this->css_file();

        return view('client.pages.about.index')->with('data', $data);
    }

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
