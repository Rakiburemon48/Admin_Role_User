<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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
Route::get('/',[MainController::class,'index'])->name('index');
Route::get('admin/dashboard',[MainController::class,'dashboard'])->name('dashboard')->middleware('isUser');

Route::get('/user',[UserController::class,'user'])->name('user');
Route::middleware('isSuperAdmin')->controller(MainController::class)->group(function(){
    
    Route::get('admin/addAdmin','addAdmin')->name('addAdmin');
    Route::post('admin/createAdmin','createAdmin')->name('createAdmin');
    Route::get('admin/adminList','adminList')->name('adminList');
    Route::get('admin/editAdmin/{id}','editAdmin')->name('editAdmin');
    Route::put('admin/updateAdmin/{id}','updateAdmin')->name('updateAdmin');
    Route::delete('admin/deleteAdmin/{id}','deleteAdmin')->name('deleteAdmin');
   
});
Route::controller(AdminController::class)->group(function(){
    
    
    Route::get('admin/outlet','outlet')->name('outlet');
    Route::post('admin/createOutlet','createOutlet')->name('createOutlet');
    Route::get('admin/outletList','outletList')->name('outletList');
    Route::get('admin/editOutlet/{id}','editOutlet')->name('editOutlet');
    Route::put('admin/updateOutlet/{id}','updateOutlet')->name('updateOutlet');
    Route::delete('admin/deleteOutlet/{id}','deleteOutlet')->name('deleteOutlet');
    Route::get('admin/report/{id}','report')->name('report');

   
});

Auth::routes(['register'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
