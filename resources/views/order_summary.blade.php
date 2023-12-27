@push('title')
    <title>Order Summary</title>
@endpush
@extends('layouts.main')
@section('main_section')
<div class="container">
    <h1>Order Details</h1>
    @if($orders)
    <table class="table">
        <thead>
            <tr>
                <th>Order Id</th>
                <th>Total Amount</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td scope="row">{{$orders->order_id}}</td>
                <td>{{$orders->total_amount}}</td>
                <td>{{$orders->status}}</td>
            </tr>
            
        </tbody>
    </table>
    @endif
    <h1>Order Items</h1>
    <div class="table-responsive">
        <table class="table table-striped table-hover table-borderless table-primary align-middle">
            <thead class="table-light">
                <tr>
                    <th>Product Id</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach($order_items as $item)
                <tr
                    class="table-primary">
                    <td scope="row">{{$item->product_id}}</td>
                    <td>{{$item->quantity}}</td>
                    <td>{{$item->subtotal}}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                
            </tfoot>
        </table>
    </div>
    
</div>
@endsection