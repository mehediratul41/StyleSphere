@extends('admin.admin')

@section('admin_main_section')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title text-center">Add New Category</h4>
        <p class="card-description text-center">
          New Category
        </p>
        <form class="forms-sample" method="POST" action="{{url('admin_panel/categories/add-category')}}">
            @csrf
          <div class="form-group row">
            <label for="name" class="col-sm-3 col-form-label">Category Name</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="name" name="name" placeholder="Category Name" value="{{old('name')}}" required autofocus>
              @if ($errors->has('name'))
              <h6 class="text-danger text-center mt-2">{{ $errors->first('name') }}</h6>
              @endif
            </div>
          </div>
          <button type="submit" class="btn btn-primary me-2">Add Category</button>
        </form>
      </div>
    </div>
  </div>
@endsection