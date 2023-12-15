<?php

namespace App\Http\Controllers;
use App\Models\Category;
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

}
