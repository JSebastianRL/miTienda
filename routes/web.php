<?php

use App\Models\User;
use League\Flysystem\PathPrefixer;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Auth::routes();

Route::get('/', [IndexController::class, 'showProductCardIndex'])->name('index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'showProductCardHome'])->name('home');
Route::get('/carrito', [App\Http\Controllers\CarritoController::class, 'showProductCardCarrito'])->name('carrito');


Route::get('/teclados', [App\Http\Controllers\TecladosController::class, 'showProductCardTeclados'])->name('teclados');
Route::get('/monitores', [App\Http\Controllers\MonitoresController::class, 'showProductCardMonitores'])->name('monitores');
Route::get('/mouse', [App\Http\Controllers\MouseController::class, 'showProductCardMouse'])->name('mouse');
Route::get('/audifonos', [App\Http\Controllers\AudifonosController::class, 'showProductCardAudifonos'])->name('audifonos');



Route::get('/registerForm',[RegisterController::class,'showRegistrationForm'])->name('registerForm');
Route::post('/register',[RegisterController::class,'register'])->name('register');
Route::get('/loginForm',[LoginController::class,'showLoginForm'])->name('loginForm');
Route::post('/login',[LoginController::class,'login'])->name('login');
Route::post('/logout',[LoginController::class,'logout'])->name('logout');

// Route::group(['prefix' => 'Users', 'controller' => UserController::class], function () {
Route::group(['prefix' => 'Users','middleware' => ['auth', 'role:admin'], 'controller' => UserController::class], function () {

    Route::get('/','showUserTable')->name('show.user.table');
    Route::get('/CreateUser','showCreateUsers')->name('show.create.user');
    Route::get('/UpdateUser/{user}','showUpdateUser')->name('show.update.user');

    Route::get('/getUser/{user}','getUserById')->name('get.user');

    Route::post('/CreateUser', 'saveUser')->name('create.user');
    Route::put('/UpdateUser/{user}', 'updateUser')->name('update.user');
    Route::delete('/DeleteUser/{user}', 'deleteUser')->name('delete.user');
});

// Route::group(['prefix' => 'Product', 'controller' => ProductController::class], function () {
Route::group(['prefix' => 'Product','middleware' => ['auth', 'role:admin'], 'controller' => ProductController::class], function () {

    Route::get('/','showProductTable')->name('show.product.table');
    Route::get('/CreateProduct','showCreateProducts')->name('show.create.product');
    Route::get('/UpdateProduct/{product}','showUpdateProducts')->name('show.update.product');


    Route::get('/getProduct/{product}','getProductById')->name('get.product');


    Route::post('/Create', 'saveProduct')->name('create.product');
    Route::put('/Update/{product}', 'updateProduct')->name('update.product');
    Route::delete('/Delete/{product}', 'deleteProduct')->name('delete.product');
});

// Route::get('/Product/', [CategoryController::class, 'showCreateModalProducts'])->name('home');
