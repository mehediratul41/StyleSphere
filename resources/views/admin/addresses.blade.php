@extends('admin.admin')
@section('admin_main_section')
<div class="row">
    <div class="col-md-12 stretch-card">
      <div class="card">
        <div class="card-body">
          <p class="card-title text-center">All Addresses Are Here</p>
          <div class="table-responsive">
            <table id="recent-purchases-listing" class="table">
              <thead>
                <tr>
                    <th>Address Id</th>
                    <th>User Id</th>
                    <th>Street Address</th>
                    <th>City</th>
                    <th>Zip Code</th>
                    <th>Country</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($addresses as $address)                    
                <tr>
                    <td>{{$address->address_id}}</td>
                    <td>{{$address->user_id}}</td>
                    <td>{{$address->street_address}}</td>
                    <td>{{$address->city}}</td>
                    <td>{{$address->zip_code}}</td>
                    <td>{{$address->country}}</td>
                    <td>{{$address->created_at}}</td>
                    <td>{{$address->updated_at}}</td>
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