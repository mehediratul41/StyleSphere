@extends('layouts.main')
@push('title')
    <title>Cart</title>
@endpush
@section('main_section')
<div class="container">
    {{-- @php
        echo "<pre>";
        print_r($cart_itemsInCart);
        die;
    @endphp --}}

    <div class="table-responsive">
        <table class="table table-primary">
            @if($cart != null)
            
            <thead>
                <tr>
                    <th scope="col">Product Id</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cart->cart_items as $item)
                <tr class="">
                    <td scope="row">{{$item->product_id}}</td>
                    <td>{{$item->quantity}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>{{$item->updated_at}}</td>
                </tr>
                @endforeach
               
               @else
               
                <h1>No Items to show</h1>
                <p>Buy some products</p>
               
               @endif
            </tbody>

        </table>
    </div>
    
</div>
@endsection