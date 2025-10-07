<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contacto',function(){
    return view('contacto');
});
Route::get('/post',function(){
    return view('post');
});
Route::get('/index',function(){
    return view('index');
});
Route::get('/about',function(){
    return view('about');
});
Route::group(['prefix' => 'dashboard'],function(){
    Route::get('/',function(){
    return view('admin.dashboard');
    });
    Route::get('/users',[UsersController::class,'getUsers']);
    Route::post('/users',[UsersController::class,'createUsers']);
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
