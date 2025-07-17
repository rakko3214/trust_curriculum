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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;

Route::get('/', [App\Http\Controllers\ShopController::class, 'index'])->name('top');

Route::get('shops/{id}/show', [ShopController::class, 'show'])->name('shops.show');

Route::get('shops/{id}/edit', [ShopController::class, 'edit'])->name('shops.edit')->middleware(['auth']);

Route::get('shops/create', [App\Http\Controllers\ShopController::class, 'create'])->name('shops.create');

Route::get('shops/mine', [App\Http\Controllers\ShopController::class, 'mine'])->name('shops.mine');

Route::resource('shops', App\Http\Controllers\ShopController::class)->except(['show'])->middleware(['auth']);

Route::get('products/{id}/show', [ProductController::class, 'show'])->name('products.show');

Route::get('shops/{id}/products/create', [ProductController::class, 'create'])->name('products.create');

Route::get('shops/{id}/products/edit', [ProductController::class, 'edit'])->name('products.edit')->middleware(['auth']);

Route::resource('products', App\Http\Controllers\ProductController::class)->except(['create', 'show', 'edit'])->middleware(['auth']);

require __DIR__.'/auth.php';
