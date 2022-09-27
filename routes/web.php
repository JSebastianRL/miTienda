<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use League\Flysystem\PathPrefixer;

Auth::routes();

Route::get('/', function () {
    return view('index');
})->name('index');

Route::group(['prefix' => 'Users', 'controller' => UserController::class], function () {


    Route::get('/','showUserTable')->name('show.user.table');
    Route::get('/CreateUser','showCreateUsers')->name('show.create.user');
    Route::post('/CreateUser', 'saveUser')->name('create.user');
});


Route::group(['prefix' => 'Product', 'controller' => ProductController::class], function () {

    Route::get('/','showProductTable')->name('show.product.table');
    Route::get('/CreateProduct','showCreateProducts')->name('show.create.product');
    Route::post('/CreateProduct', 'saveProduct')->name('create.product');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
