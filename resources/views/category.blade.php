@extends('layouts.main')
@push('title')
    <title>Categories</title>
@endpush
@section('main_section')

    @foreach ($categories as $category)
        <div class="card-group">
            <div class="card m-5 p-5" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="{{$category->name}}">
                <div class="card-body">
                  <h5 class="card-title">{{$category->name}} </h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="{{url('/categories')}}/{{$category->name}}" class="btn btn-primary">{{$category->name}}</a>
                </div>
            </div>
        </div>
    @endforeach

@endsection