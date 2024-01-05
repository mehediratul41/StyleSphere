@extends('admin.admin')
@section('admin_main_section')
<div class="edit_profile">
    @if(session()->has('user_id'))
    <div class="edit_profile_details">
        <div class="edit_profile_info">
            <p>User ID Can not be Modified</p>
            <p>User Email Can not be modified</p>
        </div>
        <div class="edit_profile_details">
            <form method="POST" action="{{ url('admin_panel/update') }}/{{session('user_id')}}">
                @csrf
                @method('PUT')
                <div class="form-group mb-3 edit_profile_form">
                    <label for="name">Enter your Name :</label>
                    <input type="text" placeholder="Name" id="name" class="form-control" name="name" value="{{session('name')}}"
                        required autofocus>
                    @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="d-grid mx-auto">
                    <button type="submit" class="btn btn-outline-success">Update</button>
                </div>
            </form>
        </div>
        @else
            <p>No user details available.</p>
        @endif
    </div>
</div>
@endsection