@extends('layouts.main')
@push('title')
    <title>About</title>
@endpush
@section('main_section')

<h1 class="text-center">
    About Page
    {{-- @php
        // $session_datas  = $request->session()->all();
        // echo "<pre>";
        // print_r($session_datas);
    @endphp
    {{ session()->all() }} --}}

        <!-- Access user details from the session -->
        @if(session()->has('user_id'))
        <p>User ID: {{ session('user_id') }}</p>
        <p>User Name: {{ session('name') }}</p>
        <p>User Email: {{ session('email') }}</p>
        <!-- Add more user details as needed -->
    @else
        <p>No user details available.</p>
    @endif
</h1>

@endsection