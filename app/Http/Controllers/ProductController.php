<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //function to view the product

    public function view()
    {
        $products = Product::all();
        $data = compact('products');
        // echo "<pre>";
        // print_r($data);
        // die;
        return view('product')->with($data);
    }
}
