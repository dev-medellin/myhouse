<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Common\Admin\DashboardController;
use App\Http\Controllers\Common\Admin\ProjectController;
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
        Route::get('/mypage',                      [UserController::class,'mypage']);
        Route::post('/update',                      [UserController::class,'updateInfo']);
    });




Route::get('/', [HomeController::class,'index'])->name('/');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class,'index']);
    Route::get('/projects',   [ProjectController::class,'index']);
});

Route::prefix('modal')->group(function () {
    Route::get('/loginModal', [Modals::class,'loginModal']);
    Route::get('/registerModal', [Modals::class,'registerModal']);
});

Route::get('contact-form-captcha', [CaptchaValidationController::class, 'index']);
Route::post('captcha-validation', [CaptchaValidationController::class, 'capthcaFormValidate']);
Route::get('reload-captcha', [CaptchaValidationController::class, 'reloadCaptcha']);
