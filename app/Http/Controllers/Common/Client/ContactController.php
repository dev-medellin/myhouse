<?php

namespace App\Http\Controllers\Common\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ContactUsModel;
use App\Helpers\Mail\SenderHelper as Mail;

class ContactController extends Controller
{
    //

    public function index(){
        $data['page']       =  "contact";
        $data['js']         =  $this->js_file();
        $data['css']        =  $this->css_file();

        return view('client.pages.contact.index')->with('data', $data);
    }

    public function sumbitContact(Request $request){
            if(Auth::check()){
            $data = [
                'user_id'   => Auth::user()->id,
                'email'   => Auth::user()->email,
                'full_name' => Auth::user()->fname.' '.Auth::user()->lname,
                'message'   => $request->message,
                'phone_no'  =>  Auth::user()->contact,
                'status' => 'sent',
            ];

            $created_contact = ContactUsModel::updateOrCreate(['message' => $request->message],$data);

            $template = 'contact_message';
            $full_name = Auth::user()->fname.' '.Auth::user()->lname;
            if($created_contact){
                $test = new Mail($template, "realstate.myhouse@gmail.com", [
                    'subject'   => $full_name." Made A Contact Message",
                    'title'     => $full_name." Made A Contact Message",
                    'client'     => $full_name,
                    'message'    => $request->message,
                    'sender'     => Auth::user()->email,
                ]);
            }


        }

        return responseSuccess('Message Sent to Customer Service',['test' => $test]);
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
