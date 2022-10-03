<?php

use App\Models\User;
use League\Flysystem\PathPrefixer;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CarritoController;

Auth::routes();

Route::get('/', [IndexController::class, 'showProductCardIndex'])->name('index');

// Route::get('/test', function () {

//     $person = Person::find(6);
//     $person->assignRole('admin');
//     $person = Person::find(7);
//     $person->assignRole('person');
//     $person = Person::find(8);
//     $person->assignRole('foreign');
//     dd($person->toArray());
//     $role = Role::create(['name' => 'person']);
//     return $role;
// });

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


Route::get('/home', [App\Http\Controllers\HomeController::class, 'showProductCardHome'])->name('home');
Route::get('/carrito', [App\Http\Controllers\CarritoController::class, 'showProductCardCarrito'])->name('carrito');
// Route::get('/Product/', [CategoryController::class, 'showCreateModalProducts'])->name('home');
