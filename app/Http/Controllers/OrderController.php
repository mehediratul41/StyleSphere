<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //Order View Functions
    public function view()
    {
        $orders = Order::all();
        $data = compact('orders');
        // echo "<pre>";
        // print_r($data);
        // die;
        return view('order')->with($data);
    }
}
