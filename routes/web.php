<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CustomAuthController;


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

Route::get('/', function () {
    return view('welcome');
});

//Users Routes
Route::get('/users',[UserController::class,'view']);

//Categories Routes
Route::get('/categories',[CategoryController::class,'view']);

//Products Routes
Route::get('/products',[ProductController::class,'view']);
Route::get('/products/{id}',[ProductController::class,'view_product']);

//Orders Route

Route::get('/orders',[OrderController::class,'view']);

//OrderItemRoute

Route::get('/order_items',[OrderItemController::class,'view']);


//Addresses Route

Route::get('/addresses',[AddressController::class,'view']);

//Review Route

Route::get('/reviews',[ReviewController::class,'view']);

//User Role Route

Route::get('/user_roles',[UserController::class,'view_user_role']);


//Custom Authentication Controller
Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard');
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('register', [CustomAuthController::class, 'registration'])->name('register');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


//The testing routes are here

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});