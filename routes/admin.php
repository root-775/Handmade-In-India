<?php

use App\Http\Controllers\Admin\Product;
use App\Http\Controllers\Admin\ProductCategory;
use App\Http\Controllers\Admin\ProductTag;
use Illuminate\Support\Facades\Route;

Route::get('dashboard/', function () { return view('admin.dashboard'); })->name('admin.dashboard');
Route::resource('product', Product::class);
Route::resource('product-category', ProductCategory::class);
Route::resource('product-tag', ProductTag::class);
