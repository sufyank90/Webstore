<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\CustomProductController;


// Route to display the login view
Route::get('/login', function () {
    return view('login');
});

// Route to handle user logout
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

// Route to display the register view
Route::view('/register','register');

// Route to handle user login
Route::post("/login",[UserController::class,'login']);

// Route to handle user registration
Route::post("/register",[UserController::class,'register']);

// Route to display the homepage and list all products
Route::get("/",[ProductController::class,'index']);

// Route to display product details
Route::get("detail/{id}",[ProductController::class,'detail']);

// Route to add a product to the cart
Route::post("add_to_cart",[ProductController::class,'addToCart']);

// Route to display the cart list
Route::get("cartlist",[ProductController::class,'cartList']);

// Route to remove an item from the cart
Route::get("removecart/{id}",[ProductController::class,'removeCart']);

// Route to display the order placement page
Route::get("ordernow",[ProductController::class,'orderNow']);

// Route to handle order placement
Route::post("orderplace",[ProductController::class,'orderPlace']);

// Route to display the user's orders
Route::get("myorders",[ProductController::class,'myOrder']);



Route::get('/admission', [AdmissionController::class, 'showForm'])->name('admission.form');
Route::post('/admission', [AdmissionController::class, 'submitForm'])->name('admission.submit');

Route::get('/products/create', [CustomProductController::class, 'create'])->name('products.create');
Route::post('/products', [CustomProductController::class, 'store'])->name('products.store');
