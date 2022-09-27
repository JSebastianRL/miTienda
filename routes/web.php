<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/', function () {
    return view('index');
})->name('index');


Route::get('/Users',[UserController::class, 'showUserTable'])->name('show.user.table');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
