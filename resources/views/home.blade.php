@extends('layouts.main')
@push('title')
    <title>Home</title> 
@endpush
@section('main_section')
<div class="home_container">
    {{-- Main Banner Section Start --}}
    <section>
        <a href="{{url('/products')}}">
            <div class="hero_banner_container">
            </div>
        </a>
    </section>
    {{-- Main Banner Section End --}}
    {{-- Category Banner Section Start --}}
    <section>
        <div class="category_banner">
            <div class="men_banner_div">
                <a href="{{url('/categories/Men')}}">
                    <div class="men_banner">
                    </div>
                </a>
            </div>
            <div class="women_banner_div">
                <a href="{{url('/categories/Women')}}">
                    <div class="women_banner">
                    </div>
                </a>
            </div>
        </div>
    </section>
    {{-- Main Banner Section End --}}

    {{-- Men's New Arrival Section Start --}}
    <div class="men_new_arrival">
        <div class="men_new_arrival_headear">
            <h2 class="text-center">Men New Arrivals</h2>
            <h5 class="text-center">Grab these new items before they are gone!</h5>
        </div>
        <div class="men_new_arrival_items">
            @foreach ($men_category_new_arrivals as $item)
            <div class="men_new_arrival_card_body">
                <div class="men_new_arrival_img_div">
                    <a href="{{url('products')}}/{{$item->product_id}}"><img src="{{$item->image_url}}" class="men_new_arrival_img" alt="New arrival"></a>
                </div>
                <div class="men_new_arrival_paragraps">
                    <p>{{$item->name}}</p>
                    <p><i class="fa-solid fa-bangladeshi-taka-sign"></i> {{$item->price}} </p>
                </div>
                <div class="men_new_arrival_card_button">
                    <a href="{{url('/cart/add_product')}}/{{$item->product_id}}" class="btn btn-outline-success" >Add to Cart</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    {{-- Men's New Arrival Section End --}}
    {{-- Women's New Arrival Section Start --}}
    <div class="women_new_arrival">
        <div class="women_new_arrival_headear">
            <h2 class="text-center">Women New Arrivals</h2>
            <h5 class="text-center">Grab these new items before they are gone!</h5>
        </div>
        <div class="women_new_arrival_items">
            @foreach ($women_category_new_arrivals as $item)
            <div class="women_new_arrival_card_body">
                <div class="women_new_arrival_img_div">
                    <a href="{{url('products')}}/{{$item->product_id}}"><img src="{{$item->image_url}}" class="women_new_arrival_img" alt="New arrival"></a>
                </div>
                <div class="women_new_arrival_paragraps">
                    <p>{{$item->name}}</p>
                    <p><i class="fa-solid fa-bangladeshi-taka-sign"></i> {{$item->price}} </p>
                </div>
                <div class="women_new_arrival_card_button">
                    <a href="{{url('/cart/add_product')}}/{{$item->product_id}}" class="btn btn-outline-success" >Add to Cart</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    {{-- Women's New Arrival Section End --}}
</div>
@endsection