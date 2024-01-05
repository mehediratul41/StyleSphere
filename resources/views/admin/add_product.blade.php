@extends('admin.admin')

@section('admin_main_section')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title text-center">Add New Product</h4>
        <p class="card-description text-center">
          New Product
        </p>
        <form class="forms-sample" method="POST" action="{{url('admin_panel/products/add-product')}}">
            @csrf
          <div class="form-group row">
            <label for="name" class="col-sm-3 col-form-label">Product Name</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="name" name="name" placeholder="Product Name" value="{{old('name')}}" required autofocus>
              @if ($errors->has('name'))
              <h6 class="text-danger text-center mt-2">{{ $errors->first('name') }}</h6>
              @endif
            </div>
          </div>
          <div class="form-group row">
            <label for="description" class="col-sm-3 col-form-label">Description</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="description" name="description" placeholder="Product Description" value="{{old('description')}}" required>
              @if ($errors->has('description'))
              <h6 class="text-danger text-center mt-2">{{ $errors->first('description') }}</h6>
              @endif
            </div>
          </div>
          <div class="form-group row">
            <label for="price" class="col-sm-3 col-form-label">Price</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" id="price" name="price" placeholder="Price" value="{{old('price')}}" required>
              @if ($errors->has('price'))
              <h6 class="text-danger text-center mt-2">{{ $errors->first('price') }}</h6>
              @endif
            </div>
          </div>
          <div class="form-group row">
            <label for="category_id" class="col-sm-3 col-form-label">Category ID</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" id="category_id" name="category_id" placeholder="Category Id" value="{{old('category_id')}}" required>
              @if ($errors->has('category_id'))
              <h6 class="text-danger text-center mt-2">{{ $errors->first('category_id') }}</h6>
              @endif
            </div>
          </div>
          <div class="form-group row">
            <label for="image_url" class="col-sm-3 col-form-label">Image URL</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="image_url" name="image_url" placeholder="Image URL" value="{{old('image_url')}}" required>
              @if ($errors->has('image_url'))
              <h6 class="text-danger text-center mt-2">{{ $errors->first('image_url') }}</h6>
              @endif
            </div>
          </div>
          <div class="form-group row">
            <label for="stock_quantity" class="col-sm-3 col-form-label">Stock Quantity</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" id="stock_quantity" name="stock_quantity" placeholder="Stock Quantity" value="{{old('stock_quantity')}}" required>
              @if ($errors->has('stock_quantity'))
              <h6 class="text-danger text-center mt-2">{{ $errors->first('stock_quantity') }}</h6>
              @endif
            </div>
          </div>
          <button type="submit" class="btn btn-primary me-2">Add Product</button>
        </form>
      </div>
    </div>
  </div>
@endsection