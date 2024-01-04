@extends('admin.admin')
@section('admin_main_section')
<div class="row">
    <div class="col-md-12 stretch-card">
      <div class="card">
        <div class="card-body">
          <p class="card-title text-center">All Carts Are Here</p>
          <div class="table-responsive">
            <table id="recent-purchases-listing" class="table">
              <thead>
                <tr>
                    <th>Cart Id</th>
                    <th>User Id</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($carts as $cart)                    
                <tr>
                    <td>{{$cart->cart_id}}</td>
                    <td>{{$cart->user_id}}</td>
                    <td>{{$cart->created_at}}</td>
                    <td>{{$cart->updated_at}}</td>
                    <td><a href="#" class="btn btn-outline-primary">View</a></td>
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