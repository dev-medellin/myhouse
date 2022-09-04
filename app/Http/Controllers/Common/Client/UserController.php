<?php

namespace App\Http\Controllers\Common\Client;

use App\Http\Controllers\Controller;
use App\Helpers\Mail\SenderHelper as Mail;
use Illuminate\Http\Request;
use App\Models\UsersModel;
use App\Models\EmailVerifyModel as Verify;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //

    public $data = [];
    public $response = [];

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function mypage(){

        $data['js']     =  $this->js_file();
        $data['css']    =  $this->css_file();

    return view('client.pages.mypage.index')->with('data', $data);
    }

    public function js_file(){
        $data = [
            'jquery-2.2.3.min.js',
            'jquery-ui/jquery-ui-1.12.0.min.js',
            'bootstrap.min.js',
            'inputmask/jquery.inputmask.bundle.js',
            'owl.carousel.min.js',
            'owl-1.3.2/owl.carousel.min.js',
            'wow.min.js',
            'typed.min.js',
            'jquery.nouislider.min.js',
            'jquery.mobile.custom.min.js',
            'map-script.js',
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
            'jquery.nouislider.min.css',
            'animate.min.css',
            'font-awesome.min.css',
            'flaticons\font\flaticon.css',
            'style.css',
            'header-menu-responsive.css',
            'responsive.css',
            'code_field.css'
        ];

        return $data;
    }
}
