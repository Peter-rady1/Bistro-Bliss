<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FoodsController;
use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\TablesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::controller(FoodsController::class)->group(function(){
    // Route::get('addfood','addfoodview')->name('addfoodview');
    // Route::get('viewfood','viewfood')->name('viewfood');
    // Route::get('/admin','adminpanal')->name('admin');
    Route::post('foodsubmit','addfood')->name('addfood');
    Route::get('/update/{id}','update')->name('foods.update');
    Route::post('/updatedata/{id}','updatedata')->name('foods.updatedata');
    Route::get('/delete/{id}','delete')->name('products.delete');
    Route::get('menu','view')->name('menu');
});





Route::controller(TablesController::class)->group(function(){
    Route::get('/table','index')->name('table');
    Route::post('tablesubmit','reserve')->name('booking');
    Route::get('/admin/notifications','notify')->name('admin.notify');
    Route::get('/admin/notifications/accept','accept')->name('accept');
    Route::get('product/delete/{id}','delete')->name('notify.delete');
    Route::get('product/accept/{id}','accept')->name('notify.accept');
    Route::get('product/reject/{id}','reject')->name('notify.reject');
    Route::get('/notifications/{$users_id}','stat')->name('stat'); 
});

// Route::controller(NotificationsController::class)->group(function(){
// });


Route::get('/', function () {return view('content.home');});
Route::get('/home' ,function(){return view ('content.home');})->name('home');
Route::get('/about' ,function(){return view ('content.about');})->name('about');
Route::get('/table' ,function(){return view ('content.table');})->name('table');





Route::middleware([ 'auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    
Route::get('/dashboard', function () {
    if(auth()->user()->role == 'admin' ){
        return redirect()->route('admin') ;
       }else{
        return view('content.home');
       }
    })->name('dashboard');

});


Route::middleware(['adminmid'])->group(function(){
    Route::get('/admin',[FoodsController::class,'adminpanal'])->name('admin');
});

