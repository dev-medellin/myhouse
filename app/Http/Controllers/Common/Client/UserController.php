<?php

namespace App\Http\Controllers\Common\Client;

use App\Http\Controllers\Controller;
use App\Helpers\Mail\SenderHelper as Mail;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function register(Request $request){

        $template = 'verify_code';
        $receiver = 'arthur.glophics@gmail.com';
        $code     = rand(1231,7879);

            $test = new Mail($template, $receiver, [
                'subject'   => "testEMail",
                'title'     => "Verification Code",
                'site_url'  => env('ADMIN_URL'),
                'code'     => $code,
                'sender'    => 'system@stickerdot.co.nz'
            ]);

            var_dump($code);
    }
}
