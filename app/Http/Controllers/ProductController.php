<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //function to view the product

    public function view(Request $request)
    {
        $search = $request['search'] ?? "";
        $sortBy = $request['sort_by'] ?? "newest";
        // echo "<pre>";
        // print_r($search);
        // die;
        if($search != "")
        {
            $products = Product::where('name','LIKE',"%$search%");
        }
        else
        {
            $products = Product::with('category');
        }

        switch ($sortBy) {
            case 'price_low_high':
                $products->orderBy('price');
                break;
    
            case 'price_high_low':
                $products->orderBy('price', 'desc');
                break;
    
            case 'name':
                $products->orderBy('name');
                break;
    
            case 'newest':
            default:
                $products->orderBy('created_at', 'desc');
                break;
        }

        $products = $products->paginate(10);

        $data = compact('products','search','sortBy');
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
    public function test($name)
    {
        $category = Category::where('name','name');
        $data = compact('category');
        echo "<pre>";
        print_r($data);
    }
}
