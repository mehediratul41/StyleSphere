<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order_item;

class OrderItemController extends Controller
{
    //Order Items view function
    public function view()
    {
        $order_items = Order_item::all();
        $data = compact('order_items');
        // echo "<pre>";
        // print_r($data);
        // die;
        return view('order_item')->with($data);
    }
}
