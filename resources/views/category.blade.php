@extends('layouts.main')
@push('title')
    <title>Categories</title>
@endpush
@section('main_section')
          <table class="table table-striped dark">
                <thead>
                    <tr>
                        <th>Category Id</th>
                        <th>Category Name</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->category_id}}</td>
                        <td>{{$category->name}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
@endsection