<?php

namespace App\Http\Controllers\Common\Client;

use App\Http\Controllers\Controller;
use App\Helpers\Mail\SenderHelper as Mail;
use Illuminate\Http\Request;
use App\Models\UsersModel;
use App\Models\EmailVerifyModel as Verify;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //

    public $data = [];
    public $response = [];

    public function register(Request $request){

        $request->validate([
            'passwordInput' => 'required',
            'emailInput' => 'required|email',
            // 'captcha' => 'required|captcha'
        ]);

        $template = 'verify_code';
        $receiver = "licayan.joan29@gmail.com";
        $code     = rand(1231,7879);

            $test = new Mail($template, $receiver, [
                'subject'   => "testEMail",
                'title'     => "Verification Code",
                'code'     => $code,
            ]);

        die();

        // $user = UsersModel::where('email', '=', $request->emailInput)->first();
        // if ($user === null) {
        //     $query = UsersModel::create([
        //         'email'     => $request->emailInput,
        //         'pass_word' => $password,
        //     ]);

        //     $verify = Verify::where('email', '=', $request->emailInput)->first();
        //     if ($user === null) {
        //         $inserted = Verify::create([
        //             'user_id'     => $query->id,
        //             'email'       => $query->email,
        //             'code'        => $code
        //         ]);
        //     }else{
        //         $inserted = Verify::where('email', $query->email)
        //                             ->update([
        //                                 'user_id'     => $query->id,
        //                                 'email'       => $query->email,
        //                                 'code'        => $code
        //                             ]);
        //     }

        //     $test = new Mail($template, $receiver, [
        //         'subject'   => "Verification Code",
        //         'title'     => "Verification Code",
        //         'code'     => $code,
        //     ]);
        //     return responseSuccess('Verification Code has been sent you our email!',['email' =>  $query->email]);
        // }else{
        //     $inserted = Verify::where('email', $user->email)
        //                         ->update([
        //                             'user_id'     => $user->id,
        //                             'email'       => $user->email,
        //                             'code'        => $code
        //                         ]);
        //                         $test = new Mail($template, $receiver, [
        //                             'subject'   => "Verification Code",
        //                             'title'     => "Verification Code",
        //                             'code'     => $code,
        //                         ]);
        //     return responseFail('Email already registered, please verify your email',['email' =>  $receiver,'trst' => $test]);
        // }
    }
}
