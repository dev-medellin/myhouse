<?php

namespace App\Http\Controllers\Common\Client;

use App\Http\Controllers\Controller;
use App\Helpers\Mail\SenderHelper as Mail;
use Illuminate\Http\Request;
use App\Models\UsersModel;
use App\Models\WishListModel;
use App\Models\EmailVerifyModel as Verify;
use App\Models\PasswordVerifyModel as PassVerify;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Libraries\MailSender;

class UserController extends Controller
{
    //

    public $data = [];
    public $response = [];

    public function __construct()
    {
    }

    public function mypage(){
        $user_id = Auth::user()->id;
        $favorite = WishListModel::select('user_wishlist.*','projects.*')
                                   ->leftJoin('projects','projects.id','user_wishlist.proj_id')
                                   ->where('user_wishlist.user_id',$user_id)
                                   ->where('projects.status','active')
                                   ->get();

        $data['page']       =  "mypage";
        $data['js']         =  $this->js_file();
        $data['css']        =  $this->css_file();
        $data['favorite']   =  $favorite;


        return view('client.pages.mypage.index')->with('data', $data);
    }

    public function updateInfo(Request $request){

        $data = [
            'email'             => ($request->email == '' ? null : $request->email),
            'contact'           => ($request->phone == '' ? null : $request->phone),
            'fname'             => ($request->fname == '' ? null : $request->fname),
            'lname'             => ($request->lname == '' ? null : $request->lname),
        ];

        $query = UsersModel::where('id',Auth::user()->id)
                             ->where($data)
                             ->get();

        if($query->isEmpty()){
            UsersModel::where('id',Auth::user()->id)->update($data);
            return responseSuccess('Information Updated Successfully!');
        }else{
            return responseFail('Update Failed!, you don`t have any changes on data!');
        }
    }

    public function getcode(Request $request){
        $template = 'verify_password_code';
        $code     = rand(1231,7879);
        $user  = Auth::user();

        $user = UsersModel::where('id', '=', $user->id)->first();


        $test = new Mail($template, $user->email, [
            'subject'   => "Verification Code Request Password",
            'title'     => "Verification Code Request Password",
            'code'     => $code,
        ]);

        $verify = PassVerify::where('email', '=', $user->email)->first();
        if ($verify === null) {
            $inserted = PassVerify::updateOrCreate([
                'user_id'     => $user->id,
                'email'       => $user->email,
                'code'        => $code
            ]);
        }else{
            $inserted = PassVerify::where('email', $user->email)
                                ->update([
                                    'code'        => $code
                                ]);
        }

        return responseSuccess('Verification Code has been sent you our email!',['email' =>  $user->email]);
    }

    public function sendPassVerify(Request $request){

        $user  = Auth::user();

        $verify = PassVerify::where('email', '=', $user->email)->first();
        if ($verify != null) {
            if($verify->code == $request->verifyCode){
                return responseSuccess('Code verified!',['email' => $user->email]);
            }else{
                return responseFail('Code is not match!');
            }
        }else{
            return responseFail('Data not found!');
        }
    }

    public function changepassword(Request $request){
        $query = UsersModel::where('id',Auth::user()->id)
        ->first();
        if($query){
            $password = Hash::make($request->new_password);
            UsersModel::where('id',Auth::user()->id)->update(['password' => $password ]);
            if(Hash::check($request->new_password, $query->password)){
                return responseFail('Please enter another password that not similar to your current password!');
            }
             return responseSuccess('Password Change Successfully!');
        }else{
            return responseFail('Change password Failed!, you don`t have any changes on data!');
        }
    }

    public function wishlistInsert(Request $request){
        $projectID = $request->projectID;
        $user_id   = Auth::user()->id;

        $data = [
            'proj_id'   => $projectID,
            'user_id'   => $user_id
        ];
        $query = WishListModel::updateOrCreate(['proj_id' => $projectID, 'user_id' => $user_id], $data);
        if($query){
            return responseSuccess('Project Added to your WishList');
        }else{
            return responseFail('Cannot add this project');
        }

    }








    // design

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
