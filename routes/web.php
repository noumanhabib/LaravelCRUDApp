<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\UserController::class, 'index']);
Route::get("/user/add", [App\Http\Controllers\UserController::class, 'add']);
Route::post("/user/add", [App\Http\Controllers\UserController::class, 'add']);
Route::post("/user/delete", [App\Http\Controllers\UserController::class, 'delete']);
Route::get("/user/update/{id}", [App\Http\Controllers\UserController::class, 'update']);
Route::post("/user/update", [App\Http\Controllers\UserController::class, 'update']);