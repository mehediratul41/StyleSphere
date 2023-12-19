{{-- 
      <td>{{$product->product_id}}</td>
      <td>{{$product->name}}</td>
      <td>{{$product->description}}</td>
      <td>{{$product->price}}</td> 
      <td>{{$product->category_id}}</td>
      <td>{{$product->image_url}}</td>
      <td>{{$product->stock_quantity}}</td> 
      <td>{{$product->created_at}}</td>
      <td>{{$product->updated_at}}</td> --}}

      @extends('layouts.main')
      @push('title')
          <title>Products</title>
      @endpush
      @section('main_section')
      
          @foreach ($products as $product)
              <div class="card-group">
                  <div class="card m-3 p-3" style="width: 18rem;">
                      <img src="{{$product->image_url}}" class="card-img-top w-50 h-50" alt="{{$product->name}}">
                      <div class="card-body">
                        <h5 class="card-title">{{$product->name}} </h5>
                        <h5> Price : <button class="btn btn-success">BDT: {{$product->price}}</button></h5>
                        <h5>Category : <button class="btn btn-primary">{{$product->category_id}}</button> </h5>
                        <h5>Stock Quantity : <button class="btn btn-danger">{{$product->stock_quantity}}</button> </h5>
                        <h5 class="card-title"> <button class="btn btn-success">{{date('F j, Y', strtotime($product->created_at))}}  </button></h5>
                        <h5 class="card-title"><button class="btn btn-primary">{{date('F j, Y', strtotime($product->updated_at))}} </button></h5>
                        <p class="card-title">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="{{url('/products')}}" class="btn btn-primary">Add to Cart</a>
                      </div>
                  </div>
              </div>
          @endforeach
          <div class="row">
            {{$products->links()}}
          </div>
      
      @endsection