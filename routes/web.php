<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\user\UserController;
use App\Http\Controllers\admin\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin','middleware'=>['admin','auth'],'namespace'=>'admin'], function () {
    Route::get('dashbord',[AdminController::class, 'index'])->name('admin.dashbord');
});

Route::group(['prefix' => 'user','middleware'=>['user','auth'],'namespace'=>'user'], function () {
    Route::get('dashbord',[UserController::class,'index'])->name('user.dashbord');
});

