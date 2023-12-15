<?php

namespace App\Http\Controllers;

use App\Models\Review;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    //view the review

    public function view()
    {
        $reviews = Review::all();
        $data = compact('reviews');
    
        echo "<pre>";
        print_r($data);
        die;
    }

}
