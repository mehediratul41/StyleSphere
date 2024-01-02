@extends('layouts.main')
@push('title')
    <title>Checkout</title>
@endpush
@section('main_section')
<div class="checkout_container">
    {{-- @php
        // echo "<pre>";
        // print_r($cart_itemsInCart);
        // die;
        // dd($productsInCartItem);
    @endphp --}}
    <h1 class="text-center checkout_header">place your order</h1>
    <div class="table-responsive">
        <table class="table checkout_table">
            @if($cart != null)
            
            <thead>
                <tr>
                    <th class="text-center" scope="col">Name</th>
                    <th  class="text-center" scope="col">Quantity</th>
                    <th  class="text-center" scope="col">Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productsInCartItem as $item)
                <tr class="">
                    <td  class="text-center" scope="row">{{$item['name']}}</td>
                    <td class="text-center">{{$item['quantity']}}</td>
                    <td class="text-center">{{$item['price']}}</td>
                </tr>
                @endforeach

               @else
               
                <h1>No Items to show</h1>
                <p>Buy some products</p>
               
               @endif
            </tbody>

        </table>
        <h3 class="text-end price_header ">Total Price : {{$totalPrice}}</h3>
      
        <h2 class="text-center address_header">Give Your Address: </h2>
        <div class="address">
            <form method="POST" action="{{ route('place_order') }}">
                @csrf
                <div class="form-group checkout_form_field mb-3">
                    <label for="street_address">Enter Street Address : </label>
                    <input type="text" placeholder="Enter your street address" id="street_address" class="form-control" name="street_address" value="{{old('street_address')}}"
                        required autofocus>
                    @if ($errors->has('street_address'))
                    <span class="text-danger">{{ $errors->first('street_address') }}</span>
                    @endif
                </div>
                <div class="form-group mb-3 checkout_form_field">
                    <label for="city">Enter your City : </label>
                    <input type="text" placeholder="City" id="city" class="form-control"
                        name="city" value="{{old('city')}}" required>
                    @if ($errors->has('city'))
                    <span class="text-danger">{{ $errors->first('city') }}</span>
                    @endif
                </div>
                <div class="form-group mb-3 checkout_form_field">
                    <label for="zip_code">Enter your Zip Code : </label>
                    <input type="number" placeholder="Zip Code" id="zip_code" class="form-control"
                        name="zip_code" value="{{old('zip_code')}}" required>
                    @if ($errors->has('zip_code'))
                    <span class="text-danger">{{ $errors->first('zip_code') }}</span>
                    @endif
                </div>
                <div class="form-group mb-3 checkout_form_field">
                    <label for="country">Enter your Country : </label>
                    <input type="text" placeholder="Country" id="country" class="form-control"
                        name="country" value="{{old('country')}}" required>
                    @if ($errors->has('country'))
                    <span class="text-danger">{{ $errors->first('country') }}</span>
                    @endif
                </div>
                <div class="d-grid mx-auto">
                    <button type="submit" class="btn btn-primary order_button">Place Order</button>
                </div>
            </form>
        </div>
    </div>
    
</div>
@endsection