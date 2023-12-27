<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
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

//Testing Route
Route::get('/test/{name}',[ProductController::class,'test']);

//Users Routes
Route::get('/users',[UserController::class,'view']);
Route::get('/user/view_profile',[UserController::class,'view_profile']);
Route::get('/user/edit_profile',[UserController::class,'edit_profile']);
Route::put('/user/update/{id}',[UserController::class,'update_profile']);



//Categories Routes
Route::get('/categories',[CategoryController::class,'view']);
Route::get('/categories/{name}',[CategoryController::class,'category_products']);

//Products Routes
Route::get('/products',[ProductController::class,'view']);
Route::get('/products/{id}',[ProductController::class,'view_product']);

//Cart Routes

Route::get('/cart',[CartController::class,'view']);
Route::get('/cart/add_product/{id}',[CartController::class,'add_product']);
Route::get('/cart/checkout',[CartController::class,'checkout']);


//Orders Route
Route::get('/orders',[OrderController::class,'view']);
Route::post('/orders/place_order',[CartController::class,'place_order'])->name('place_order');
Route::get('/orders/summary', [OrderController::class,'order_summary'])->name('order.summary');


//OrderItemRoute

Route::get('/order_items',[OrderItemController::class,'view']);


//Addresses Route

Route::get('/addresses',[AddressController::class,'view']);

//Review Route

Route::get('/reviews',[ReviewController::class,'view']);

//User Role Route

Route::get('/user_roles',[UserController::class,'view_user_role']);


//Custom Authentication Controller
Route::get('login', [CustomAuthController::class, 'login'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('register', [CustomAuthController::class, 'register'])->name('register');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('logout', [CustomAuthController::class, 'logOut'])->name('logout');


//The testing routes are here

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});