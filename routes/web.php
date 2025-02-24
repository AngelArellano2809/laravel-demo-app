<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/new-contact', function (Request $request) {
    dd($request->all() , $request->user_mail   );
    // dd('listo');
});
