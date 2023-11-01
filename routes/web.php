<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () { return view('home.home'); })->name('home');
Route::get('/shop', [ProductController::class, 'index'] )->name('shop');
Route::get('/product/{slug}', function () { return view('home.product-detail'); })->name('product.detail');
Route::get('/blog', function () { return view('home.blog'); })->name('blog');
Route::get('/blog/{slug}', function () { return view('home.single-blog'); })->name('single.blog')->where('slug', '[A-Za-z0-9-_]+');
Route::get('/about-us', function () { return view('home.about-us'); })->name('about-us');
Route::get('/contact-us', function () { return view('home.contact-us'); })->name('contact-us');
