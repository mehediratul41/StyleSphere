<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //function to view the product

    public function view()
    {
        $products = Product::paginate('5');
        $data = compact('products');
        // echo "<pre>";
        // print_r($data);
        // die;
        return view('products')->with($data);
    }
    
    //function to view the sigle product

    public function view_product($id)
    {
        $product = Product::find($id);
        // echo "<pre>";
        // print_r($product);
   

        $featured = Product::orderByDesc('name')->take(10)->get();
        
        // echo "<pre>" ;
        // print_r($featured);

        $data = compact('product','featured');

        return view('product')->with($data);
        // return view('product')->with(['data' => $data, 'featured' => $featured]);

    }
}
