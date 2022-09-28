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

    Route::get('/UpdateUser/{user}','showUpdateUser')->name('show.update.user');

    Route::post('/CreateUser', 'saveUser')->name('create.user');
    Route::put('/UpdateUser/{user}', 'updateUser')->name('update.user');
    Route::delete('/DeleteUser/{user}', 'deleteUser')->name('delete.user');
});


Route::group(['prefix' => 'Product', 'controller' => ProductController::class], function () {

    Route::get('/','showProductTable')->name('show.product.table');
    Route::get('/CreateProduct','showCreateProducts')->name('show.create.product');

    Route::get('/UpdateProduct/{product}','showUpdateProducts')->name('show.update.product');

    Route::post('/CreateProduct', 'saveProduct')->name('create.product');
    Route::put('/UpdateProduct/{product}', 'updateProduct')->name('update.product');
    Route::delete('/DeleteProduct/{product}', 'deleteProduct')->name('delete.product');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
