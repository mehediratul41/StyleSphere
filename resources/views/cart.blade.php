@extends('layouts.main')
@push('title')
    <title>Cart</title>
@endpush
@section('main_section')

    {{-- @php
        echo "<pre>";
        print_r($cart_itemsInCart);
        die;
    @endphp --}}
<div class="cart_container">
    <h1>CART Items</h1>
    <div class="table-responsive cart_table">
        <table class="table ">
            @if($cart != null)
            
            <thead>
                <tr>
                    <th scope="col" class="text-center">Product Id</th>
                    <th scope="col" class="text-center">Quantity</th>
                    <th scope="col" class="text-center">Created At</th>
                    {{-- <th scope="col">Updated At</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($cart->cart_items as $item)
                <tr class="">
                    <td scope="row" class="text-center">{{$item->product_id}}</td>
                    <td class="text-center">{{$item->quantity}}</td>
                    <td class="text-center">{{$item->created_at}}</td>
                    {{-- <td>{{$item->updated_at}}</td> --}}
                </tr>
                @endforeach
               
               @else
               
                <h1>No Items to show</h1>
                <p>Buy some products</p>
               
               @endif
            </tbody>

        </table>
        <div class="text-center">
            <a href="{{url('/cart/checkout')}}" class="btn btn-outline-primary proceed_button">Proceed to Checkout</a>
        </div>
    </div>
    
</div>
@endsection