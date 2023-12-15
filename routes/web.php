<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\ReviewController;

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
Route::get('/user',[UserController::class,'view']);

//Categories Routes
Route::get('/categories',[CategoryController::class,'view']);

//Products Routes
Route::get('/products',[ProductController::class,'view']);

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