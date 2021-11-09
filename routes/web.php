<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductGalleryResourceController;
use App\Http\Controllers\ProductResourceController;
use App\Http\Controllers\TransactionResourceController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Auth::routes(['register' => false]);

Route::resource('products', ProductResourceController::class);
Route::get('products/{id}/gallery', [ProductResourceController::class, 'gallery'])
     ->name('products.gallery');

Route::resource('product-galleries', ProductGalleryResourceController::class);

Route::resource('transactions', TransactionResourceController::class);
Route::get('transactions/{id}/set-status', [TransactionResourceController::class, 'setStatus'])
     ->name('transactions.status');
