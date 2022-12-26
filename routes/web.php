<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SingleController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;

Route::get('/',[MainController::class,'index'])->name('index');



Route::get('/about',[AboutController::class,'index'])->name('about');



Route::get('/contact',[ContactController::class,'index'])->name('contact');
Route::post('/contact/post',[ContactController::class,'postContact'])->name('postContact');




Route::get('/products',[ProductsController::class,'index'])->name('products');



Route::get('/products/{id}',[SingleController::class,'index'])->name('single');
Route::get('/cart',[CartController::class,'showCart'])->name('showCart');
Route::post('/add-to-cart',[CartController::class,'addToCart'])->name('addToCart');
Route::post('/cart/delete',[CartController::class,'deleteCart'])->name('deleteCart');
Route::post('cart/order',[CartController::class,'order'])->name('order');




Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login/post',[LoginController::class,'loginPost'])->name('loginPost');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');



Route::prefix('admin')->middleware('isAdmin')->group(function(){
    Route::get('/panel',[AdminController::class,'index'])->name("admin");
    Route::get('/contacts',[AdminController::class,'showContacts'])->name('adminContacts');
    Route::get('/about',[AdminController::class,'showAbout'])->name('adminAbout');
    Route::put('/about/update',[AdminController::class,'updateAbout'])->name('updateAbout');
    Route::get('/products/edit/{id}',[AdminController::class,'editProduct'])->name('editProduct');
    Route::put('products/update',[AdminController::class,'updateProducts'])->name('updateProduct');
    Route::get('/products',[AdminController::class,'showProducts'])->name('showProducts');
    Route::get('/products/create',[AdminController::class,'showCreateProducts'])->name('showCreateProducts');
    Route::post('/products/store',[AdminController::class,'storeProducts'])->name('storeProducts');
    Route::get('/products/delete/{id}',[AdminController::class,'deleteProduct'])->name('deleteProduct');
    Route::get('/orders',[AdminController::class,'showOrders'])->name('showOrders');
    Route::get('/orders/{orderNumber}',[AdminController::class,'showOrderITems'])->name('showOrderItems');
});


