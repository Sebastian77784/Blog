<?php

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