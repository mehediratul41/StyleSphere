@extends('admin.admin')
@section('admin_main_section')
<div class="view_profile">
    @if(session()->has('user_id'))
    <div class="view_user_details">
        <img src="{{asset('assets/logo.png')}}" class="user_photo" alt="User Photo">
        <div class="user_details">
            <p>USER ID : {{ session('user_id') }}</p>
            <p>USER NAME : {{ session('name') }}</p>
            <p>USER EMAIL : {{ session('email') }}</p>
        </div>
        <a href="{{url('/admin_panel/edit_profile')}}" class="btn btn-outline-primary edit_profile_anchor" >Edit Profile</a>
    </div>
    <!-- Add more user details as needed -->
    @else
        <p>No user details available.</p>
    @endif
</div>
@endsection