
@extends('layouts.main')
@push('title')
    <title>Products</title>
@endpush
@section('main_section')
<div class="products">
      {{-- search product by name --}}
    <div class="search_sort">
      <div class="search">
            <form action="" class="search_form">
                <input type="search" name="search" class="form-control" value="{{$search}}" placeholder="Search By product name">
                <button type="submit" class="btn btn-outline-success">Search</button>
            </form>
            <span class="reset_button"><a href="{{url('/products')}}"><button class="btn btn-outline-danger ">Reset</button></a></span>
        </div>

            <form action="">
                <div class="sort">
                <label for="sort_by">Sort by:</label>
                <select name="sort_by" id="sort_by">
                    <option value="newest" {{ $sortBy == 'newest' ? 'selected' : '' }}>Newest first</option>
                    <option value="price_low_high" {{ $sortBy == 'price_low_high' ? 'selected' : '' }}>Price Low to High</option>
                    <option value="price_high_low" {{ $sortBy == 'price_high_low' ? 'selected' : '' }}>Price High to Low</option>
                    <option value="name" {{ $sortBy == 'name' ? 'selected' : '' }}>Name</option>
                </select>
                <button type="submit" class="btn btn-outline-primary">Sort</button>
                </div>
            </form>

    </div>
        {{-- <livewire:products :products="$products" /> --}}
        <div class="each_product">
          @foreach ($products as $product)
                  <div class=" card_product_item">
                      <img src="{{$product->image_url}}" class="card_item_img" alt="{{$product->name}}">
                      <div class="card_product_body">
                        <h5 class="card_product_title">{{$product->name}} </h5>
                        <h5> Price : <i class="fa-solid fa-bangladeshi-taka-sign"></i> {{$product->price}}</h5>
                        <a href="{{url('/cart/add_product')}}/{{$product->product_id}}" class="btn btn-outline-success">Add to Cart</a>
                        <a href="{{url('/products')}}/{{$product->product_id}}" class="btn btn-outline-primary">View Product</a>
                      </div>
                  </div>
              
          @endforeach
      </div>
      <div class="container">
        {{$products->links()}}
      </div>

         
</div>   
 @endsection