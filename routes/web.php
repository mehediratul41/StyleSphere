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
use App\Http\Controllers\AdminController;

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
Route::get('/home', [HomeController::class,'view']);

//---------------------------------------------------Routes for admin panel--------------------------

Route::get('/admin_panel',[AdminController::class,'view'])->middleware('admin');

Route::get('/admin_panel/products',[AdminController::class,'products'])->middleware('admin');
Route::get('/admin_panel/products/add-product',[AdminController::class,'add_product'])->middleware('admin');
Route::post('/admin_panel/products/add-product',[AdminController::class,'add_product_post'])->middleware('admin');
Route::get('/admin_panel/products/edit-product/{id}',[AdminController::class,'edit_product'])->middleware('admin');
Route::put('/admin_panel/products/update-product/{id}',[AdminController::class,'update_product'])->middleware('admin');
Route::delete('/admin_panel/products/delete-product/{id}',[AdminController::class,'delete_product'])->middleware('admin');

Route::get('/admin_panel/categories',[AdminController::class,'categories'])->middleware('admin');
Route::get('/admin_panel/categories/add-category',[AdminController::class,'add_category'])->middleware('admin');
Route::post('/admin_panel/categories/add-category',[AdminController::class,'add_category_post'])->middleware('admin');
Route::get('/admin_panel/categories/edit-category/{id}',[AdminController::class,'edit_category'])->middleware('admin');
Route::put('/admin_panel/categories/update-category/{id}',[AdminController::class,'update_category'])->middleware('admin');
Route::delete('/admin_panel/categories/delete-category/{id}',[AdminController::class,'delete_category'])->middleware('admin');

Route::get('/admin_panel/users',[AdminController::class,'users'])->middleware('admin');
// Route::delete('/admin_panel/users/delete-user/{id}',[AdminController::class,'delete_user']);

Route::get('/admin_panel/orders',[AdminController::class,'orders'])->middleware('admin');
Route::get('/admin_panel/orders/edit-order/{id}',[AdminController::class,'edit_order'])->middleware('admin');
Route::put('/admin_panel/orders/update-order/{id}',[AdminController::class,'update_order'])->middleware('admin');
Route::get('/admin_panel/carts',[AdminController::class,'carts'])->middleware('admin');
Route::get('/admin_panel/addresses',[AdminController::class,'addresses'])->middleware('admin');
Route::get('/admin_panel/view_profile',[AdminController::class,'view_profile'])->middleware('admin');
Route::get('/admin_panel/edit_profile',[AdminController::class,'edit_profile'])->middleware('admin');
Route::put('/admin_panel/update/{id}',[AdminController::class,'update_profile'])->middleware('admin');