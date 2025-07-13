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

Route::get('/', [App\Http\Controllers\ShopController::class, 'index']);

Route::get('shops/{id}', [ShopController::class, 'show'])->name('shops.show');

Route::resource('shops', App\Http\Controllers\ShopController::class)->except(['show'])->middleware(['auth']);

require __DIR__.'/auth.php';
