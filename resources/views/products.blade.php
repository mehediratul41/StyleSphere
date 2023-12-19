@extends('layouts.main')
@push('title')
  <title>Products</title>
@endpush
@section('main_section')
            <table class="table">
  <thead>
    <tr>
      <th scope="col">ProductId</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">CategoryId</th>
      <th scope="col">ImageURL</th>
      <th scope="col">StockQuantity</th>
      <th scope="col">Created_at</th>
      <th scope="col">Updated_at</th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $product)
    <tr>
      <td>{{$product->product_id}}</td>
      <td>{{$product->name}}</td>
      <td>{{$product->description}}</td>
      <td>{{$product->price}}</td> 
      <td>{{$product->category_id}}</td>
      <td>{{$product->image_url}}</td>
      <td>{{$product->stock_quantity}}</td> 
      <td>{{$product->created_at}}</td>
      <td>{{$product->updated_at}}</td>
     
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
