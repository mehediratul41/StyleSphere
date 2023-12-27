<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Order_item;
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
    //User Order summary
    public function order_summary()
    {
        $user_id = request()->session()->get('user_id');
        $orders = Order::where('user_id','=',$user_id)->first();
        $order_items = $orders->order_items;
        // $product_name =$order_items->product;
        // dd($product_name);
        
        // if($orders != null)
        // {

        // }
        // dd($order_items,$orders);
        $data = compact('orders','order_items');
        // dd($orders);
        return view('order_summary')->with($data);
    }
}
