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
        $receiver = $request->emailInput;
        $code     = rand(1231,7879);
        $user = UsersModel::where('email', '=', $request->emailInput)->first();
        if ($user === null) {
            $query = UsersModel::create([
                'email'     => $request->emailInput,
                'pass_word' => Hash::make($request->passwordInput),
            ]);

            $inserted = Verify::create([
                'user_id'     => $query->id,
                'email'       => $query->email,
                'code'        => $code
            ]);

            if ($inserted){
                $test = new Mail($template, $receiver, [
                    'subject'   => "testEMail",
                    'title'     => "Verification Code",
                    'site_url'  => env('ADMIN_URL'),
                    'code'     => $code,
                    'sender'    => 'myhouse.officialinfo@gmail.com'
                ]);
            }
            return responseSuccess('Verification Code has been sent you our email!',$test);
        }else{
            return responseFail('Email already exist!');
        }
        //     var_dump($code);
    }
}
