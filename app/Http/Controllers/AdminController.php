<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Cart_item;
use App\Models\Order;
use App\Models\Order_item;
use App\Models\Address;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //function for admin panel view
    public function view()
    {
        return view('admin.layouts.admin_home');
    }
    //funtion for all products view
    public function products()
    {
        $products = Product::all();

        // dd($products_category);
        $data = compact('products');
        return view('admin.products')->with($data);
    }
    //function for all categoriew view
    public function categories()
    {
        $categories = Category::all();
        $data = compact('categories');
        return view('admin.categories')->with($data);
    }
    //function for all user view
    public function users()
    {
        $users = User::all();
        $data = compact('users');
        return view('admin.users')->with($data);
    }
    //function for all orders view
    public function orders()
    {
        $orders = Order::all();
        $data = compact('orders');
        return view('admin.orders')->with($data);
    }
    //function for all addresses view
    public function addresses()
    {
        $addresses = Address::all();
        $data = compact('addresses');
        return view('admin.addresses')->with($data);
    }
    //function for all cart view
    public function carts()
    {
        $carts = Cart::all();
        $data = compact('carts');
        return view('admin.carts')->with($data);
    }
    //function for viewing the admin profile
    public function view_profile()
    {
        return view('admin.view_profile');
    }
    //function for editing the admin profile
    public function edit_profile()
    {
        return view('admin.edit_profile');
    }
    //Function for Update the user profile
    public function update_profile($id, Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $user = User::find($id);
        $user->name = $request->name;
        $user->update();
        $request->session()->put('name', $user->name);
        return redirect()->back();
    }
}
