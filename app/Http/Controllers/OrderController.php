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
        $orders = Order::where('user_id','=',$user_id)->where('status','=','pending')->get();
        // dd($orders);
        foreach ($orders as $order) {
            // Load the related order_items for each order
            $order->load('order_items');
        
            // Access the order_items for the current order
            $orderItems = $order->order_items;

            $allOrderItems[] = $orderItems;
        
            // Do something with $orderItems
            // dd($orderItems);
            // echo "<pre>";
            // print_r($orderItems);
        }
        // dd($allOrderItems);
        // $order_items = $orders->order_items;
        // dd($order_items);
        // $product_name =$order_items->product;
        // dd($product_name);
        
        // if($orders != null)
        // {

        // }
        // dd($order_items,$orders);
        $data = compact('orders','allOrderItems');
        // dd($orders);
        return view('order_summary')->with($data);
    }
}
