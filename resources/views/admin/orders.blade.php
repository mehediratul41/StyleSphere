@extends('admin.admin')
@section('admin_main_section')
<div class="row">
    <div class="col-md-12 stretch-card">
      <div class="card">
        <div class="card-body">
          <p class="card-title text-center">All Orders Are Here</p>
          <div class="table-responsive">
            <table id="recent-purchases-listing" class="table">
              <thead>
                <tr>
                    <th>Order Id</th>
                    <th>User Id</th>
                    <th>Total Ammount</th>
                    <th>Status</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th>View Order</th>
                    <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($orders as $order)                    
                <tr>
                    <td>{{$order->order_id}}</td>
                    <td>{{$order->user_id}}</td>
                    <td>{{$order->total_amount}}</td>
                    @if ($order->status == 'pending')
                    <td class="text-danger">{{$order->status}}</td>
                    @else
                    <td>{{$order->status}}</td>
                    @endif
                    <td>{{$order->created_at}}</td>
                    <td>{{$order->updated_at}}</td>
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