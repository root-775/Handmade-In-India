<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductTagController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard/', function () { return view('admin.dashboard'); })->name('dashboard');
Route::resource('product', ProductController::class);
Route::resource('product-category', ProductCategoryController::class);
Route::resource('product-tag', ProductTagController::class);


