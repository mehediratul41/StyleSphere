@extends('layouts.main')
@push('title')
    <title>{{session('name')}}</title>
@endpush

@section('main_section')
        @if(session()->has('user_id'))
        <p>User ID: {{ session('user_id') }}</p>
        <p>User Name: {{ session('name') }}</p>
        <p>User Email: {{ session('email') }}</p>
        <!-- Add more user details as needed -->
        @else
            <p>No user details available.</p>
        @endif
@endsection