<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Common\Admin\DashboardController;
use App\Http\Controllers\Common\Admin\ProjectController;
use App\Http\Controllers\Common\Contructor\ProjectController as CPC;
use App\Http\Controllers\Common\Contructor\ProfileController as CPFC;
use App\Http\Controllers\Common\Client\ProjectController as PCC;
use App\Http\Controllers\Common\Client\PDFController;
use App\Http\Controllers\Common\Admin\PDFController as APDF;
use App\Http\Controllers\CaptchaValidationController;
use App\Http\Controllers\Common\Admin\ContructorController as ACC;
use App\Http\Controllers\Common\Admin\UsersInfoController;
use App\Http\Controllers\Common\Admin\WishlistController;
use App\Http\Controllers\Common\Client\AboutController;
use App\Http\Controllers\Common\Client\ContactController;
use App\Http\Controllers\Common\Client\ContructorController;
use App\Http\Controllers\Common\Contructor\DashboardController as CCD;
use App\Http\Controllers\Common\Contructor\EmployeeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Common\Client\HomeController;
use App\Http\Controllers\Common\Client\UserController;
use App\Http\Controllers\Modals;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;

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

Route::group(['prefix' => 'auth',], function(){
    Route::post('/register',                [AuthController::class,'register']);
    Route::post('/verify',                  [AuthController::class,'verify']);
    Route::post('/login',                   [AuthController::class,'signin']);
    Route::get('/logout',                   [AuthController::class,'logout']);
});

Route::prefix('users')->middleware('client')->group(function() {
    Route::get('/mypage',                               [UserController::class,'mypage']);
    Route::post('/update',                              [UserController::class,'updateInfo']);
    Route::post('/getcode',                             [UserController::class,'getcode']);
    Route::post('/sendPassVerify',                      [UserController::class,'sendPassVerify']);
    Route::post('/wishlist',                            [UserController::class,'wishlistInsert']);
    Route::get('/contructor/register',                  [ContructorController::class,'index']);
    Route::get('/generate-pdf/{id}',                   [PDFController::class, 'generatePDF']);

    Route::prefix('contractor')->group(function (){
        Route::get('/register',                          [ContructorController::class,'index']);
        Route::get('/message',                           [ContructorController::class,'message']);
        Route::post('/applied',                          [ContructorController::class,'applied']);
    });
});

// Admins Route
Route::prefix('admin')->middleware('admin')->group(function() {
    Route::get('/dashboard',  [DashboardController::class,'index']);
    // Route::get('/projects',   [ProjectController::class,'index']);
    Route::get('/contructors',  [ACC::class,'index']);
    Route::get('/wishlist',   [WishlistController::class,'index']);
    Route::post('/contructors/status',[ACC::class,'updateTestStatus']);
    Route::get('/users',      [UsersInfoController::class,'index']);
    Route::post('/chart',     [DashboardController::class,'get_chart']);
    Route::get('/print-dashboard',              [APDF::class, 'generatePDF']);

    //Projects
    // Route::group(['prefix' => 'projects'], function(){
    //     Route::get('edit/{slug}',                   [ProjectController::class,'editSlug']);
    //     Route::post('getmaterials',                  [ProjectController::class,'getMaterials']);
    //     Route::post('create',                       [ProjectController::class,'insertProj']);
    //     Route::post('edit',                         [ProjectController::class,'editProj']);
    //     Route::post('update',                       [ProjectController::class,'updateProj']);
    //     Route::post('status',                       [ProjectController::class,'updateStatus']);
    //     Route::post('delete/image',                 [ProjectController::class,'imageDelete']);
    //     Route::post('update/image',                 [ProjectController::class,'imageUpdate']);
    //     Route::post('search',                       [ProjectController::class,'searchProj']);
    //     Route::post('update/info',                  [ProjectController::class,'updateInfo']);
        


    //     Route::group(['prefix' => 'update'], function(){
    //         Route::post('project',                      [ProjectController::class,'imageupload']);
    //     });


    //     Route::group(['prefix' => 'images'], function(){
    //         Route::post('upload',                      [ProjectController::class,'imageupload']);
    //     });
    // });

    Route::group(['prefix' => 'users'], function(){
        Route::get('edit/{id}',                         [UsersInfoController::class,'editUsers']);
        Route::post('/update',                          [UsersInfoController::class,'updateInfo']);
    });

    Route::group(['prefix' => 'contructor'], function(){
        Route::get('edit/{id}',                         [UsersInfoController::class,'editUsers']);
        Route::post('/update',                          [UsersInfoController::class,'updateInfo']);
    });


});


// Contructor
Route::prefix('contructor')->middleware('contructor')->group(function() {
    Route::get('dashboard',                             [CCD::class,'index']);
    Route::get('/projects',                             [CPC::class,'index']);
    Route::post('/chart',                               [CCD::class,'get_chart']);
    Route::get('/profile',                              [CPFC::class,'index']);
    Route::get('testImage',                            [CPFC::class,'testImage']);
    Route::get('testImage',                            [CPFC::class,'testImage']);

    Route::group(['prefix' => 'projects'], function(){
        Route::get('edit/{slug}',                   [CPC::class,'editSlug']);
        Route::post('getmaterials',                 [CPC::class,'getMaterials']);
        Route::post('create',                       [CPC::class,'insertProj']);
        Route::post('edit',                         [CPC::class,'editProj']);
        Route::post('update',                       [CPC::class,'updateProj']);
        Route::post('status',                       [CPC::class,'updateStatus']);
        Route::post('delete/image',                 [CPC::class,'imageDelete']);
        Route::post('update/image',                 [CPC::class,'imageUpdate']);
        Route::post('search',                       [CPC::class,'searchProj']);
        Route::post('update/info',                  [CPC::class,'updateInfo']);
        Route::post('send_materials',               [CPC::class,'send_materials']);
        Route::post('new_materials',               [CPC::class,'new_materials']);

        Route::get('file-import-export', [EmployeeController::class, 'fileImportExport'])->name('file-import-export');
        Route::post('file-import', [EmployeeController::class, 'fileImport'])->name('file-import');
        Route::get('file-export', [EmployeeController::class, 'fileExport'])->name('file-export');

        
        


        Route::group(['prefix' => 'update'], function(){
            Route::post('project',                      [CPC::class,'imageupload']);
            Route::post('profile',                      [CPFC::class,'updateProfile']);
        });


        Route::group(['prefix' => 'images'], function(){
            Route::post('upload',                      [CPC::class,'imageupload']);
        });
    });
});




Route::get('/', [HomeController::class,'index'])->name('/');
Route::get('/projects',                 [PCC::class,'index']);
Route::get('/about',                    [AboutController::class,'index']);
Route::get('/projects/{slug}',          [PCC::class,'selected']);
Route::get('/contact',                  [ContactController::class,'index']);
Route::post('/price',                   [PCC::class,'getPrice']);
Route::post('/check/user',              [AuthController::class,'checkUser']);
Route::post('/contact',                 [ContactController::class,'sumbitContact']);
Route::post('/passwordReset',           [UserController::class,'getcode']);
Route::post('/sendPassVerify',          [UserController::class,'sendPassVerify']);
Route::post('/changepassword',          [UserController::class,'changepassword']);
Route::post('/resendVerification',      [UserController::class,'resentVerification']);
Route::get('/contractor/list',                              [ContructorController::class,'listContructor']);
Route::get('/contractor/{slug}',                            [ContructorController::class,'selected']);


Route::prefix('modal')->group(function () {
    Route::get('/loginModal', [Modals::class,'loginModal']);
    Route::get('/registerModal', [Modals::class,'registerModal']);
});

Route::get('contact-form-captcha', [CaptchaValidationController::class, 'index']);
Route::post('captcha-validation', [CaptchaValidationController::class, 'capthcaFormValidate']);
Route::get('reload-captcha', [CaptchaValidationController::class, 'reloadCaptcha']);
