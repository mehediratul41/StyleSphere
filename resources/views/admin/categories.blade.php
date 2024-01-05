@extends('admin.admin')
@section('admin_main_section')
<div class="row">
    <div class="col-md-12 stretch-card">
      <div class="card">
        <div class="card-body">
          <p class="card-title text-center">All Categories Are Here</p>
          <a href="{{url('admin_panel/categories/add-category')}}" class="btn btn-primary text-center text-white">Add New Category</a>
          <div class="table-responsive">
            <table id="recent-purchases-listing" class="table">
              <thead>
                <tr>
                    <th>Category Id</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($categories as $category)                    
                <tr>
                    <td>{{$category->category_id}}</td>
                    <td>{{$category->name}}</td>
                    <td><a href="{{url('admin_panel/categories/edit-category')}}/{{$category->category_id}}" > <button class="btn btn-primary">Edit</button></a> 
                      <form action="{{ url('admin_panel/categories/delete-category', $category->category_id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this category?')">
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