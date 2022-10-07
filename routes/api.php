<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Routing\RouteGroup;

Route::group(['prefix' => 'Users', 'controller' => UserController::class], function () {
    Route::get('/GetAllUsers', 'getAllUsers');
    Route::get('/GetUserById/{user}', 'getUserById');
    Route::post('/SaveUser', 'saveUser');
    Route::put('/UpdateUser/{user}', 'updateUser');
    Route::delete('/DeleteUser/{user}', 'deleteUser');
});

Route::group(['prefix'=>'Product', 'controller'=> ProductController::class],function(){
    Route::get('/GetAllProduct', 'getAllProduct');
    Route::get('/GetProductById/{id}', 'getProductById');
    Route::post('/SaveProduct', 'saveProduct');
    Route::put('/UpdateProduct/{Product}', 'updateProduct');
    Route::delete('/DeleteProduct/{Product}', 'deleteProduct');

});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
