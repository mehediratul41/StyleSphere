<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Cart;
use App\Models\Cart_item;
use App\Models\Product;
use App\Models\Order;
use App\Models\Order_item;
use App\Models\Address;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view()
    {
        return view('admin.admin');
    }
    public function products()
    {
        $products = Product::all();
        // $products_category = $products->category->name;
        // dd($products_category);
        $data = compact('products');
        return view('admin.products')->with($data);
    }
}
