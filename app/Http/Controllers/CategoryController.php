<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //function for view the categories

    public function view()
    {
        $categories = Category::all();
        $data = compact('categories');
        return view('category')->with($data);
    }
    public function category_products($name)
    {


        $category = Category::where('name',$name)->first();
        $productsInCategory = $category->products()->paginate(12);

        // Retrieving all products from the same category
        // $productsInCategory = $category->products;
        $data = compact('productsInCategory', 'category');
        // echo "<pre>" ;
        // print_r($data);
        // die;
        return view('category_products')->with($data);

    }

}
