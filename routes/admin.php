<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\Admin\WelcomPageController;
use App\Models\WelcomePage;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'isAdmin'])->group(function() {
   Route::get('/dashboard',[FrontendController::class,'index']);

       ####################### Main Categorey Route ###########################
       Route::group(['prefix' => 'pages'], function(){
         Route::get('/home',[WelcomPageController::class,'index'])->name('homepage.index');
         Route::get('creat',[WelcomPageController::class,'create'])->name('homepage.create');
         Route::post('add',[WelcomPageController::class,'store'])->name('admin.welcom.store');
         Route::get('edit/{id}', [WelcomPageController::class,'edit' ])->name('edit-home');
         Route::post('update/{id}', [WelcomPageController::class,'update' ])->name('admin.home.update');
         Route::get('delet/{id}', [WelcomPageController::class,'destroy' ])->name('delet-home');
        
     });
     ####################### Main Categorey Route ###########################
});
