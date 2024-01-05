@extends('admin.admin')
@section('admin_main_section')
<div class="row">
    <div class="col-md-12 stretch-card">
      <div class="card">
        <div class="card-body">
          <p class="card-title text-center">All Products Are Here</p>
          <a href="{{url('admin_panel/products/add-product')}}" class="btn btn-primary text-center text-white">Add New Product</a>
          <div class="table-responsive">
            <table id="recent-purchases-listing" class="table">
              <thead>
                <tr>
                    <th>Product Id</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Stock Quantity</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($products as $product)                    
                <tr>
                    <td>{{$product->product_id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->category->name}}</td>
                    <td><img src="{{$product->image_url}}" alt="Product Image" style="height: 30px; width:30px" ></td>
                    <td>{{$product->stock_quantity}}</td>
                    <td>{{$product->created_at}}</td>
                    <td>{{$product->updated_at}}</td>
                    <td><a href="{{url('admin_panel/products/edit-product')}}/{{$product->product_id}}" > <button class="btn btn-primary">Edit</button></a> 
                      <form action="{{ url('admin_panel/products/delete-product', $product->product_id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                      </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection