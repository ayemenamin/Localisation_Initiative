<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FrontendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| yes thist is me test xampp.
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'isAdmin'])->group(function() {
   Route::get('/dashboard',[FrontendController::class,'index']);

       ####################### Main Categorey Route ###########################
       Route::group(['prefix' => 'main_categories'], function(){
         Route::get('/home Page',[FrontendController::class,'home'])->name('home.index');
        
     });
     ####################### Main Categorey Route ###########################
});
