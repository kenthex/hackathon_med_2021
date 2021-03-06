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

Route::get('/', '\App\Http\Controllers\IndexController')->name('index');

Route::get('/catalog/category/{slug}', [\App\Http\Controllers\CatalogController::class, 'category'])->name('catalog.category');
Route::get('/catalog/brand/{slug}', [\App\Http\Controllers\CatalogController::class, 'brand'])->name('catalog.brand');
Route::get('/catalog/product/{slug}', [\App\Http\Controllers\CatalogController::class, 'product'])->name('catalog.product');
Route::get('/basket/index', [\App\Http\Controllers\BasketController::class, 'index'])->name('basket.index');
Route::get('/basket/checkout', [\App\Http\Controllers\BasketController::class, 'checkout'])->name('basket.checkout');


Route::name('user.')->prefix('user')->group(function () {
    Route::get('index', [App\Http\Controllers\UserController::class, 'index'])->name('index');
    Route::post('save_main/{id}', [App\Http\Controllers\UserController::class, 'save_main'])->name('save_main');
    Route::post('save_blood/{id}', [App\Http\Controllers\UserController::class, 'save_blood'])->name('save_blood');
    Auth::routes();
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
