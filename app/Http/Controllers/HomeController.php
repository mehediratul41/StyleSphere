<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function view()
    {
        $men_category = Category::where('name','Men')->first();
        $men_category_new_arrivals = $men_category->products()->orderBy('created_at', 'desc')->take(5)->get();
        // dd($men_category_new_arrivals);

        $women_category = Category::where('name','Women')->first();
        $women_category_new_arrivals = $women_category->products()->orderBy('created_at', 'desc')->take(5)->get();
        // dd($women_category_new_arrivals);

        $data = compact('men_category_new_arrivals','women_category_new_arrivals');
        // dd($data);

        return view('home')->with($data);
    }
}
