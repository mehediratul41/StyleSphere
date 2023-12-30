@push('title')
    <title>Order Summary</title>
@endpush
@extends('layouts.main')
@section('main_section')
<div class="container">
    <h1>Order Details</h1>
    @if($orders)
    @foreach ($orders as $order)
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
                <td scope="row">{{$order->order_id}}</td>
                <td>{{$order->total_amount}}</td>
                <td>{{$order->status}}</td>
            </tr>           
        </tbody>
    </table>
    {{-- <h1>Order Items</h1>
    {{ $loop->iteration }}
    {{$allOrderItems[0]}} --}}
    {{-- @php
        $i = 0;
        echo "$allOrderItems[0]->order_id";
        $i++;
    @endphp --}}
    @endforeach
    {{-- <h1>Order Items</h1>
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
                @foreach($allOrdersItems as $item)
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
    </div> --}}
    @endif
    

    
</div>
@endsection