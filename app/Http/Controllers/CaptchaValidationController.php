<?php
 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
 
class CaptchaValidationController extends Controller
{
 
    // public function capthcaFormValidate(Request $request)
    // {
    //     $request->validate([
    //         'emailInput' => 'required|email',
    //         'passwordInput' => 'required',
    //         'captcha' => 'required|captcha'
    //     ]);
    // }
 
    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
 
}