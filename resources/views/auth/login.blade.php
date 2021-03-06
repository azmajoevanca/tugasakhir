@extends('layouts.auth')
​
@section('title')
    <title>Login</title>
@endsection
​
@section('content')
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>
​
            <form method="POST" action="{{ route('login') }}">
            @csrf
            @if ($message = Session::get('error'))
				<div class="alert alert-error alert-block">
				<strong>{{ $message }}</strong>
				</div>
			@endif
                <div class="form-group has-feedback">
                    <input type="email"
                        name="email" 
                        class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" 
                        placeholder="{{ __('E-Mail Address') }}"
                        value="{{ old('email') }}">
                    <span class="fa fa-envelope form-control-feedback"> {{ $errors->first('email') }}</span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" 
                        name="password"
                        class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }} " 
                        placeholder="{{ __('Password') }}">
                    <span class="fa fa-lock form-control-feedback"> {{ $errors->first('password') }}</span>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                </div>
            </form>
​
            <p class="mb-1">
                <a href="#">I forgot my password</a>
            </p>
            <p class="mb-0">
                <a href="{{'/register'}}" class="text-center">Register a new membership</a>
            </p>
        </div>
    </div>
@endsection