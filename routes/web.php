<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\user\UserController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin','middleware'=>['admin','auth'],'namespace'=>'admin'], function () {
    Route::get('dashbord',[AdminController::class, 'index'])->name('admin.dashbord');
    Route::get('department/list',[Controllers\admin\department\DepartmentController::class, 'index'])->name('department.list');
    Route::get('ddepartment/edit/{id}',[Controllers\admin\department\DepartmentController::class, 'deptedit'])->name('admin.dept.edit');
    Route::get('department/addpage',[Controllers\admin\department\DepartmentController::class, 'adddepartment'])->name('department.add');
    Route::post('department/insert',[Controllers\admin\department\DepartmentController::class, 'store'])->name('department.store');

    Route::post('admin/department/update/',[Controllers\admin\department\DepartmentController::class, 'update'])->name('update.department');

});

Route::group(['prefix' => 'user','middleware'=>['user','auth'],'namespace'=>'user'], function () {
    Route::get('dashbord',[UserController::class,'index'])->name('user.dashbord');
});
Route::get('/', [Controllers\BlogfrontendController::class, 'index']);
//
//
