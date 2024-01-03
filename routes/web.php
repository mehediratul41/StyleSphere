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
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;



Route::get('/',[HomeController::class,'view'] );

//Testing Route
Route::get('/test/{name}',[ProductController::class,'test']);

//Users Routes
Route::get('/users',[UserController::class,'view'])->middleware('login');
Route::get('/user/view_profile',[UserController::class,'view_profile'])->middleware('login');
Route::get('/user/edit_profile',[UserController::class,'edit_profile'])->middleware('login');
Route::put('/user/update/{id}',[UserController::class,'update_profile'])->middleware('login');



//Categories Routes
Route::get('/categories',[CategoryController::class,'view']);
Route::get('/categories/{name}',[CategoryController::class,'category_products']);

//Products Routes
Route::get('/products',[ProductController::class,'view']);
Route::get('/products/{id}',[ProductController::class,'view_product']);

//Cart Routes

Route::get('/cart',[CartController::class,'view'])->middleware('login');
Route::get('/cart/add_product/{id}',[CartController::class,'add_product'])->middleware('login');
Route::get('/cart/checkout',[CartController::class,'checkout'])->middleware('login');


//Orders Route
Route::get('/orders',[OrderController::class,'view'])->middleware('login');
Route::post('/orders/place_order',[CartController::class,'place_order'])->name('place_order')->middleware('login');
Route::get('/orders/summary', [OrderController::class,'order_summary'])->name('order.summary')->middleware('login');


//OrderItemRoute

Route::get('/order_items',[OrderItemController::class,'view'])->middleware('login');


//Addresses Route

Route::get('/addresses',[AddressController::class,'view'])->middleware('login');

//Review Route

Route::get('/reviews',[ReviewController::class,'view']);

//User Role Route

Route::get('/user_roles',[UserController::class,'view_user_role']);


//Custom Authentication Controller
Route::get('login', [CustomAuthController::class, 'login'])->name('login')->middleware('notlogin');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom')->middleware('notlogin');
Route::get('register', [CustomAuthController::class, 'register'])->name('register')->middleware('notlogin');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom')->middleware('notlogin');
Route::get('logout', [CustomAuthController::class, 'logOut'])->name('logout')->middleware('login');



Route::get('/about', function () {
    return view('about');
});
Route::get('/home', function () {
    return view('home');
});