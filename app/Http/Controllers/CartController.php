<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Cart_item;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    //function for viewing the cart items
    public function view()
    {
        $user_id = request()->session()->get('user_id');
        $cart = Cart::where('user_id','=',$user_id)->first();
        // $cart_itemsInCart = $cart ? $cart->cart_items : null;
        if($cart != null){
            $cart_itemsInCart = $cart->cart_items ;
            $data = compact('cart','cart_itemsInCart');
            return view('cart')->with($data);
        }
        else
        {
            $cart = null ;
            $data = compact('cart');
            return view('cart')->with($data);
        }
        // echo "<pre>";
        // print_r($cart_itemsInCart);
        // die;
        // dd($cart);


    }
    //Adding products to the cart
    public function add_product($id)
    {

        $user_id = request()->session()->get('user_id');
        if($user_id != null)
        {
        $user_cart = Cart::firstOrCreate(['user_id' => $user_id]);
        Cart_item::create([
            'cart_id' => $user_cart['cart_id'],
            'product_id' => $id,                 
        ]);
       }
       else
       {
        return view('auth.login');
       }
        // $item = Cart_item::where('user_id','=',$user_id);
        // echo "<pre>";
        // print_r($user_cart);
        // die;
        // dd($request);
        return Redirect::back();
    }
    public function checkout()
    {
        $user_id = request()->session()->get('user_id');
        $cart = Cart::where('user_id','=',$user_id)->first();
        if($cart != null){
            $cart_itemsInCart = $cart->cart_items;
            // dd($cart_itemsInCart);
            $productsInCartItem = $cart_itemsInCart->map(function ($cartItem) {
                return [
                    'name' => $cartItem->product->name,
                    'quantity' => $cartItem->quantity,
                    'price' => $cartItem->product->price, 
                ];
            });
            // dd($productsInCartItem);
            $totalPrice = $cart_itemsInCart->reduce(function ($total, $cartItem) {
                return $total + $cartItem->product->price;
            }, 0);

            $data = compact('cart','cart_itemsInCart','productsInCartItem','totalPrice');
            // dd($data);            
            // // $productsInCart = $cart_itemsInCart->product;
            // echo "<pre>";
            // print_r($productsInCart);
            return view('checkout')->with($data);
        }
        return redirect()->back()->withErrors($validator)->withInput();
    }
    public function place_order(Request $request)
    {

        $request->validate([
            'street_address' => 'required',
            'city' => 'required',
            'zip_code' => 'required',
            'country'=>'required',
        ]);
        $req = $request->all();
        dd($req);
    }
}
