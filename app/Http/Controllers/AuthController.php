<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Helpers\Mail\SenderHelper as Mail;
use Illuminate\Http\Request;
use App\Models\UsersModel;
use App\Models\EmailVerifyModel as Verify;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //

    public $data = [];
    public $response = [];

    public function register(Request $request){

        $request->validate([
            'passwordInput' => 'required',
            'fname' => 'required',
            'lname' => 'required',
            'emailInput' => 'required|email',
            // 'captcha' => 'required|captcha'
        ]);

        $template = 'verify_code';
        $receiver = $request->emailInput;
        $code     = rand(1231,7879);
        $password = Hash::make($request->passwordInput);

        $user = UsersModel::where('email', '=', $request->emailInput)->first();
        if ($user === null) {
            $query = UsersModel::create([
                'email'     => $request->emailInput,
                'password' => $password,
                'fname'    => $request->fname,
                'lname'    => $request->lname
            ]);

            $verify = Verify::where('email', '=', $request->emailInput)->first();
            if ($verify === null) {
                $inserted = Verify::create([
                    'user_id'     => $query->id,
                    'email'       => $query->email,
                    'code'        => $code
                ]);
            }else{
                $inserted = Verify::where('email', $query->email)
                                    ->update([
                                        'code'        => $code
                                    ]);
            }

            $test = new Mail($template, $receiver, [
                'subject'   => "Verification Code",
                'title'     => "Verification Code",
                'code'     => $code,
            ]);

            return responseSuccess('Verification Code has been sent you our email!',['email' =>  $query->email]);
        }else{

            if($user->email_status != 'verified'){
                $inserted = Verify::updateOrCreate(['email'  => $user->email],[
                    'code'        => $code,
                    'user_id'     => $user->id,
                    'email'       => $user->email
                ]);
                $test = new Mail($template, $receiver, [
                    'subject'   => "Verification Code",
                    'title'     => "Verification Code",
                    'code'     => $code,
                ]);
                return responseFail('Email already registered, please verify your email',['email' =>  $receiver,'status' => 'not_verify']);
            }else{
                return responseFail('Email already registered, please login your account',['email' =>  $user->email,'status' => 'exist']);
            }
        }
    }

    public function verify(Request $request){
        $inserted = Verify::select('verify_code.code as codex', 'verify_code.user_id as user_id', 'users.email as email')
                                    ->where('users.email', $request->emailVerify)
                                    ->leftJoin('users', 'users.id', '=', 'verify_code.user_id')
                                    ->first();
        if($inserted->codex == $request->verifyCode){
           $user_info = UsersModel::where('email', $inserted->email)
                                ->update([
                                    'email_status'        => 'verified',
                                ]);
            return responseSuccess('You are you registered!',['email' =>  $inserted->email]);
        }else{
            return responseFail('Invalid Verification Code!');
        }
    }

    public function signin(Request $request){
        $credentials = $request->validate([
            'emailInputLog' => ['required', 'email'],
            'passwordInputLog' => ['required'],
        ]);
        if (Auth::attempt(['email' => $request->emailInputLog, 'password' => $request->passwordInputLog])) {
            // Authentication was successful...
            $request->session()->regenerate();
 
            return responseSuccess('You are now logined!',['data' => Auth::user()]);
        }
 
        return responseFail('Invalid login Code!'); 
    }

    public function logout(Request $request) {
        Auth::logout();
        return responseSuccess('You logout successfully!');
    }

    public function checkUser(){
        return Auth::user() != null ? responseSuccess('User loaded!', Auth::user()->id): responseFail('Data not found!');;
    }
}
