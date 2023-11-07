<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderDetailController;

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

Route::get('/',[ProductController::class,'index'])->middleware('auth')->name('product');
Route::post('/',[AuthController::class,'product'])->middleware('auth')->name('product.submit');

Route::get('/supplier',[SupplierController::class,'index'])->middleware('auth')->name('supplier');
Route::post('/supplier',[AuthController::class,'supplier'])->middleware('auth')->name('supplier.submit');

Route::get('/category',[CategoryController::class,'index'])->middleware('auth')->name('category');
Route::post('/category',[AuthController::class,'category'])->middleware('auth')->name('category.submit');

Route::get('/order',[OrderController::class,'index'])->middleware('auth')->name('order');
Route::post('/order',[AuthController::class,'order'])->middleware('auth')->name('order.submit');

Route::get('/customer',[CustomerController::class,'index'])->middleware('auth')->name('customer');
Route::post('/customer',[AuthController::class,'customer'])->middleware('auth')->name('customer.submit');

Route::get('/orderdetail',[OrderDetailController::class,'index'])->middleware('auth')->name('orderdetail');
Route::post('/orderdetail',[AuthController::class,'order'])->middleware('auth')->name('orderdetail.submit');

Route::get('/login',[AuthController::class,'index'])->name('login');
Route::post('/login',[AuthController::class,'login'])->name('login.submit');
Route::get('/logout',[AuthController::class,'logout'])->middleware('auth')->name('logout');

Route::get('/register',[AuthController::class,'registration'])->name('registration');
Route::post('/register',[AuthController::class,'register'])->name('register');
