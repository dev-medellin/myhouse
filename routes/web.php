<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Common\Admin\DashboardController;
use App\Http\Controllers\Common\Admin\ProjectController;
use App\Http\Controllers\Common\Client\ProjectController as PCC;
use App\Http\Controllers\CaptchaValidationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Common\Client\HomeController;
use App\Http\Controllers\Common\Client\UserController;
use App\Http\Controllers\Modals;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServi   ceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return redirect('/home');
// });

Route::group(['prefix' => 'auth'], function(){
    Route::post('/register',                [AuthController::class,'register']);
    Route::post('/verify',                  [AuthController::class,'verify']);
    Route::post('/login',                   [AuthController::class,'signin']);
    Route::get('/logout',                   [AuthController::class,'logout']);
});

Route::group(['prefix' => 'users'], function(){
    Route::get('/mypage',                               [UserController::class,'mypage']);
    Route::post('/update',                              [UserController::class,'updateInfo']);
    Route::post('/getcode',                             [UserController::class,'getcode']);
    Route::post('/sendPassVerify',                      [UserController::class,'sendPassVerify']);
    Route::post('/changepassword',                      [UserController::class,'changepassword']);
});

Route::group(['prefix' => 'admin'], function(){

    Route::get('/dashboard', [DashboardController::class,'index']);
    Route::get('/projects',   [ProjectController::class,'index']);

    //Projects
    Route::group(['prefix' => 'projects'], function(){
        Route::get('edit/{slug}',                   [ProjectController::class,'editSlug']);
        Route::post('create',                       [ProjectController::class,'insertProj']);
        Route::post('edit',                         [ProjectController::class,'editProj']);
        Route::post('update',                       [ProjectController::class,'updateProj']);
        Route::post('status',                       [ProjectController::class,'updateStatus']);
        Route::post('delete/image',                 [ProjectController::class,'imageDelete']);


        Route::group(['prefix' => 'update'], function(){
            Route::post('project',                      [ProjectController::class,'imageupload']);
        });


        Route::group(['prefix' => 'images'], function(){
            Route::post('upload',                      [ProjectController::class,'imageupload']);
        });
    });

    // Route::post('/update',                              [UserController::class,'updateInfo']);
    // Route::post('/getcode',                             [UserController::class,'getcode']);
    // Route::post('/sendPassVerify',                      [UserController::class,'sendPassVerify']);
    // Route::post('/changepassword',                      [UserController::class,'changepassword']);
});




Route::get('/', [HomeController::class,'index'])->name('/');
Route::get('/projects',                 [PCC::class,'index']);


Route::prefix('modal')->group(function () {
    Route::get('/loginModal', [Modals::class,'loginModal']);
    Route::get('/registerModal', [Modals::class,'registerModal']);
});

Route::get('contact-form-captcha', [CaptchaValidationController::class, 'index']);
Route::post('captcha-validation', [CaptchaValidationController::class, 'capthcaFormValidate']);
Route::get('reload-captcha', [CaptchaValidationController::class, 'reloadCaptcha']);
