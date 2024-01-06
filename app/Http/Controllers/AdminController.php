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
use Illuminate\Support\Facades\Redirect;

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
    //function for add product view the admin profile
    public function add_product()
    {
        return view('admin.add_product');
    }
    //function for adding product post 
    public function add_product_post(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'required|max:255',
            'price' => 'required|numeric|max:999999',
            'category_id'=>'required|numeric|max:4',
            'image_url' => 'required|url:http,https',
            'stock_quantity' => 'required|numeric|max:1000',
        ]);
        // echo "<pre>";
        // print_r($request->all());
        // die;
        $product =new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->image_url = $request->image_url;
        $product->stock_quantity = $request->stock_quantity;
        $product->save();
        // $req = $request->all();
        // echo "<pre>";
        // print_r($req);
        // die;
        // dd($request);
        return redirect('admin_panel/products');
    }
    //function for edit product
    public function edit_product($id)
    {
        // dd($id);
        $product = Product::find($id);
        // dd($product);
        $data = compact('product');
        return view('admin.edit_product')->with($data);
    }
    //function for update_product 
    public function update_product($id, Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'required|max:255',
            'price' => 'required|numeric|max:999999',
            'category_id'=>'required|numeric|max:4',
            'image_url' => 'required|url:http,https',
            'stock_quantity' => 'required|numeric|max:1000',
        ]);
        // echo "<pre>";
        // print_r($request->all());
        // die;
        $product = Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->image_url = $request->image_url;
        $product->stock_quantity = $request->stock_quantity;
        $product->update();
        // $req = $request->all();
        // echo "<pre>";
        // print_r($req);
        // die;
        // dd($request);
        return redirect('admin_panel/products');
    }
    //function for deleting product
    public function delete_product($id)
    {
        $product = Product::find($id);
        if(!is_null($product)){
            $product->delete();
        }
        return redirect()->back();
    }
    //function for adding category view
    public function add_category()
    {
        return view('admin.add_category');
    }
    //function for adding New Categories post 
    public function add_category_post(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
        ]);
        $category =Category::create([
            'name' => $request->name
        ]);
        // $category->name = $request->name;
        // $category->save();
        return redirect('admin_panel/categories');
    }
    //function for edit category
    public function edit_category($id)
    {
        // dd($id);
        $category = Category::find($id);
        // dd($product);
        $data = compact('category');
        return view('admin.edit_category')->with($data);
    }
    //function for update_category 
    public function update_category($id, Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
        ]);
        $category = Category::find($id);
        $category->name = $request->name;
        $category->update();
        return redirect('admin_panel/categories');
    }
    //function for deleting category
    public function delete_category($id)
    {
        $category = Category::find($id);
        if(!is_null($category)){
            $category->delete();
        }
        return redirect()->back();
    }
    // //function for deleting user
    // public function delete_user($id)
    // {
    //     $user = User::find($id);
    //     if(!is_null($user))
    //     {
    //         $user->delete();
    //     }
    //     return redirect()->back();
    // }

    //function for edit order
    public function edit_order($id)
    {
        // dd($id);
        $order = Order::find($id);
        if(is_null($order))
        {
            return redirect()->back();
        }
        // dd($product);
        $data = compact('order');
        return view('admin.edit_order')->with($data);
    }
    //function for update_order
    public function update_order($id, Request $request)
    {
        $request->validate([
            'status' => 'required|in:pending,processing,shipped,delivered,cancelled', 
        ]);
    
        $order = Order::find($id);
        if (!$order) {
            return redirect()->back();
        }
    
        $order->update(['status' => $request->input('status')]);
        // $order->status = $request->status;
        // $order->update();
    
        return redirect('admin_panel/orders');
    }
}
