@extends('admin.admin')
@section('admin_main_section')
<div class="row">
    <div class="col-md-12 stretch-card">
      <div class="card">
        <div class="card-body">
          <p class="card-title text-center">All Categories Are Here</p>
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
                    <td><a href="#" class="btn btn-primary">Edit</a> <a href="#" class="btn btn-danger">Delete</a></td>
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