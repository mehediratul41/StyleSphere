@extends('layouts.main')
@push('title')
    <title>Categories</title>
@endpush
@section('main_section')
<h1 class="category_header">PRODUCT CATEGORIES</h1>
<div class="category_container">
    @foreach ($categories as $category)
    
            <div class="category_card_body">
                <img src="https://www.gentlepark.com/sbp-admin/upload/campaign/da67f8ea6.jpg" class="category_card_img" alt="{{$category->name}}">
                <div class="category_card_body">
                  <h3 class="category_card_title">{{$category->name}}  Collection</h3>
                  <p class="category_card_description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="{{url('/categories')}}/{{$category->name}}" class="btn btn-outline-primary">View {{$category->name}} Products</a>
                </div>
            </div>

    @endforeach
</div>
@endsection