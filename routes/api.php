<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/whoIsThis',[\App\Http\Controllers\UsersController::class,'getUser']);
Route::get('/newUser',[\App\Http\Controllers\UsersController::class,'getUser']);
Route::get('/api',[\App\Http\Controllers\UsersController::class,'getData']);

