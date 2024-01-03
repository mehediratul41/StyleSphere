@extends('layouts.main')

@push('title')
    <title>{{ $category->name }}</title>
@endpush

@section('main_section')
    <h1 class="text-center category_products_header">{{ $category->name }} Collections</h1>
<div class="category_products_container">
    @foreach ($category->products as $product)
    <div class="category_products_card">
      <div class="category_products_img_div">
        <img src="{{$product->image_url}}" class="category_products_img" alt="{{$product->name}}">
      </div>
      <div class="card-body category_products_card_body">
        <h4>{{$product->name}} </h4>
        <h4> Price : <i class="fa-solid fa-bangladeshi-taka-sign"></i> {{$product->price}}</h4>
        <a href="{{url('/cart/add_product')}}/{{$product->product_id}}" class="btn btn-outline-success category_products_button">Add to Cart</a>
        <a href="{{url('/products')}}/{{$product->product_id}}" class="btn btn-outline-primary category_products_button">View Product</a>
      </div>
    </div>
    @endforeach
  </div>
  <div class="paginate_links">
    {{$productsInCategory->links()}}
  </div>
@endsection
