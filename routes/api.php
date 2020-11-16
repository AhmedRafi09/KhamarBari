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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/products', [App\Http\Controllers\Api\ProductApiController::class, 'index']);
Route::get('/products/{id}', [App\Http\Controllers\Api\ProductApiController::class, 'show']);
Route::post('/products', [App\Http\Controllers\Api\ProductApiController::class, 'store']);
Route::delete('/products/{id}', [App\Http\Controllers\Api\ProductApiController::class, 'destroy']);

Route::get('/blogs', [App\Http\Controllers\Api\BlogApiController::class, 'index']);

Route::get('/users', [App\Http\Controllers\Api\UserApiController::class, 'index']);
Route::post('/users', [App\Http\Controllers\Api\UserApiController::class, 'store']);
Route::get('/users/{id}', [App\Http\Controllers\Api\UserApiController::class, 'show']);
Route::delete('/users/{id}', [App\Http\Controllers\Api\UserApiController::class, 'destroy']);
