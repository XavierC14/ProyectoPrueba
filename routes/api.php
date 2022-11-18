<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);
Route::post('update-category', [CategoryController::class, 'update']);

Route::group( ['middleware' => ["auth:sanctum"]], function(){
    //rutas
    Route::post('insert-product', [ProductController::class, 'insert']);
    Route::post('update-product', [CategoryController::class, 'update']);
    Route::post('delete-product', [CategoryController::class, 'destroy']);
    Route::post('insert-category', [CategoryController::class, 'insert']);
    Route::post('update-category', [CategoryController::class, 'update']);
    Route::post('delete-category', [CategoryController::class, 'destroy']);
    Route::get('user-profile', [UserController::class, 'userProfile']);
    Route::get('logout', [UserController::class, 'logout']);
});
