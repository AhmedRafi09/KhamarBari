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

/*Route::get('/', function () {
    return view('pages.index');
});*/

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/

// Products

Route::get('/products/product_info', [App\Http\Controllers\ProductsController::class, 'index'])->name('products');
Route::get('/products/show', [App\Http\Controllers\PagesController::class, 'show_product']);
Route::get('/store_product', [App\Http\Controllers\ProductsController::class, 'create']);
Route::post('/store_product', [App\Http\Controllers\ProductsController::class, 'store']);
Route::get('/products/edit_product/{id}', [App\Http\Controllers\ProductsController::class, 'edit']);
Route::post('/update_product/{id}', [App\Http\Controllers\ProductsController::class, 'update']);
Route::get('/products/delete_product/{id}', [App\Http\Controllers\ProductsController::class, 'destroy']);
Route::get('/dashboard', [App\Http\Controllers\PagesController::class, 'pie']);


//Route::get('/dashboard', [App\Http\Controllers\PagesController::class, 'bar']);

//Route::get('/dashboard', [App\Http\Controllers\PagesController::class, 'line']);


// Blogs

Route::get('/blogs', [App\Http\Controllers\BlogController::class, 'index']);
Route::get('/store_blog', [App\Http\Controllers\BlogController::class, 'create']);
Route::post('/store_blog', [App\Http\Controllers\BlogController::class, 'store']);
Route::get('/show_blog/{id}', [App\Http\Controllers\BlogController::class, 'show']);

