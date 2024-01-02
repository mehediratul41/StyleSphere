@push('title')
    <title>Order Summary</title>
@endpush
@extends('layouts.main')
@section('main_section')
<div class="order_details">
    <h1 class="order_details_header">Order Details</h1>
    @if($orders)
    @foreach ($orders as $order)
    <table class="table table-bordered order_details_table">
        <thead>
            <tr >
                <th class="text-center">Order Id</th>
                <th class="text-center">Total Amount</th>
                <th class="text-center">Status</th>
            </tr>
        </thead>
        <tbody>

            <tr >
                <td class="text-center" scope="row">{{$order->order_id}}</td>
                <td class="text-center">{{$order->total_amount}}</td>
                <td class="text-center" style="color: {{ $order->status === 'pending' ? 'red' : 'green' }}">{{$order->status}}</td>
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