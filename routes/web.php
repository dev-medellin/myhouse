<?php

use App\Http\Controllers\Common\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Common\Client\HomeController;

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


Route::get('/', [HomeController::class,'index']);

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class,'index']);
});