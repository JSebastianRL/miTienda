<?php

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


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
