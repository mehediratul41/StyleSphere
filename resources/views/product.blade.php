@extends('layouts.main')
@push('title')
  <title>{{$product->name}} </title>
@endpush
@section('main_section')

                <h1 class="text-center pt-5">VIEW PRODUCT</h1>
                    <div class="single_product">
                      <div class="single_product_card_img_div">
                        <img src="{{$product->image_url}}" class="single_product_card_img" alt="{{$product->name}}">
                      </div>
                      <div class="single_product_card_body">
                        <h3 class="single_product_card_title">{{$product->name}} </h3>
                        <h3> Price : <i class="fa-solid fa-bangladeshi-taka-sign"></i> {{$product->price}}</h3>
                        <h3>Stock Quantity :{{$product->stock_quantity}} </h3>
                        <h3>Arrival Date: {{date('F j, Y', strtotime($product->created_at))}}  </h3>
                        <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="{{url('/cart/add_product')}}/{{$product->product_id}}" class="btn btn-outline-success">Add to Cart</a>
                      </div>
                    </div>

                    {{-- New Arrival products --}}
                      {{-- <h1 class="text-center">New Arrivals Featured Products</h1>
                      @foreach ($featured as $featured_product)
                      <div class="card-group">
                          <div class="card m-3 p-3" style="width: 18rem;">
                              <img src="{{$featured_product->image_url}}" class="card-img-top w-50 h-50" alt="{{$product->name}}">
                              <div class="card-body">
                                <h5 class="card-title">{{$featured_product->name}} </h5>
                                <h5> Price : <button class="btn btn-success">BDT: {{$featured_product->price}}</button></h5>
                                <h5>Category : <button class="btn btn-primary">{{$featured_product->category_id}}</button> </h5>
                                <h5>Stock Quantity : <button class="btn btn-danger">{{$featured_product->stock_quantity}}</button> </h5>
                                <h5 class="card-title"> <button class="btn btn-success">{{date('F j, Y', strtotime($featured_product->created_at))}}  </button></h5>
                                <h5 class="card-title"><button class="btn btn-primary">{{date('F j, Y', strtotime($featured_product->updated_at))}} </button></h5>
                                <p class="card-title">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="{{url('/products')}}" class="btn btn-primary">Add to Cart</a>
                              </div>
                          </div>
                      </div>
                  @endforeach --}}
@endsection