@extends('layouts.main')
@push('title')
    <title>Login</title>
@endpush
@section('main_section')
<main class="login-form">
    <div class="cotainer login_form">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center login_header">Log In</h3>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login.custom') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="email">Enter your Email : </label>
                                <input type="Email" placeholder="Email" id="email" class="form-control" name="email" value="{{old('email')}}"
                                    required autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <label for="password">Enter your Password : </label>
                                <input type="password" placeholder="Password" id="password" class="form-control"
                                    name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            {{------------Remember me token er kaj baki ---------------}}
                            {{-- <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div> --}}
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block signin_button ">Sign In</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection