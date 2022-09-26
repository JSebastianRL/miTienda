<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Routing\RouteGroup;

Route::group(['prefix' => 'Users', 'controller' => UserController::class], function () {
    Route::get('/GetAllUsers', 'getAllUsers');
    Route::get('/GetUserById', 'getAllUsers');
    Route::get('/SaveUser', 'getAllUsers');
    Route::get('/UpdateUser', 'getAllUsers');
    Route::get('/DeleteUser', 'getAllUsers');
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
