@extends('admin.admin')

@section('admin_main_section')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title text-center">Edit Order {{$order->order_id}}</h4>
        <p class="card-description text-center">
          {{$order->name}}
        </p>
        <form class="forms-sample" method="POST" action="{{url('admin_panel/orders/update-order')}}/{{$order->order_id}}">
            @csrf
            @method('PUT')
          <div class="form-group row">
            <label for="status" class="col-sm-3 col-form-label">Status</label>
            <div class="col-sm-9">
                <select name="status" id="status" required>
                    <option value="pending" {{ $order->status === 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="processing" {{ $order->status === 'processing' ? 'selected' : '' }}>Processing</option>
                    <option value="shipped" {{ $order->status === 'shipped' ? 'selected' : '' }}>Shipped</option>
                    <option value="delivered" {{ $order->status === 'delivered' ? 'selected' : '' }}>Delivered</option>
                    <option value="cancelled" {{ $order->status === 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                </select>        
              @if ($errors->has('status'))
              <h6 class="text-danger text-center mt-2">{{ $errors->first('status') }}</h6>
              @endif
            </div>
          </div>
          <button type="submit" class="btn btn-primary me-2">Update</button>
        </form>
      </div>
    </div>
  </div>
@endsection