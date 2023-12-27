@extends('layouts.main')
@push('title')
    <title>{{session('name')}}</title>
@endpush

@section('main_section')
        @if(session()->has('user_id'))
        <p>User ID Can not be Modified</p>
        <p>User Email Can not be modified</p>
        <!-- Add more user details as needed -->
        <form method="POST" action="{{ url('user/update') }}/{{session('user_id')}}">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label for="name">Enter your Name :</label>
                <input type="text" placeholder="Name" id="name" class="form-control" name="name" value="{{session('name')}}"
                    required autofocus>
                @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="d-grid mx-auto">
                <button type="submit" class="btn btn-dark btn-block">Update</button>
            </div>
        </form>
        @else
            <p>No user details available.</p>
        @endif
@endsection