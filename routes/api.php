<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Admin\AbilitiesController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/token',[AuthController::class, 'token'])->name('token');
Route::post('/logout',[AuthController::class, 'logOut']);

Route::middleware(['auth:sanctum'])->group(function () {
    
    //Users
    Route::prefix('/users')->group(function () {
        Route::get('/',[UsersController::class, 'index']);
        Route::get('/create',[UsersController::class, 'create']);
        Route::post('/store',[UsersController::class, 'store']);
        Route::get('/edit/{id}',[UsersController::class, 'edit']);
        Route::put('/update/{id}',[UsersController::class, 'update']);
        Route::delete('delete/{id}',[UsersController::class, 'destroy']);
    });

    //Roles
    Route::prefix('/roles')->group(function () {
        Route::get('/',[RolesController::class, 'index']);
        Route::get('/create',[RolesController::class, 'create']);
        Route::post('/store',[RolesController::class, 'store']);
        Route::get('/edit/{id}',[RolesController::class, 'edit']);
        Route::put('/update/{id}',[RolesController::class, 'update']);
        Route::delete('/delete/{id}',[RolesController::class, 'destroy']);
    });
    

});

