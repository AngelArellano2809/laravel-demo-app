<?php

use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

//Route::get('/contact', [MessageController::class, 'create']);

//Route::post('/new-contact', [MessageController::class, 'store']);

//Route::get('/messages', [MessageController::class, 'index']);

Route::resource('message', MessageController::class);
