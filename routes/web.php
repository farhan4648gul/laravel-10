<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [TestController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']); 


Route::get ('/contact/store', [TestController::class, 'store']); 
