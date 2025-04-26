@extends('auth.layout')
@section('title', 'Register')
@section('content')

<h6 class="font-weight-light">Register Account</h6>
<form class="pt-3" method="POST" action="{{ route('register') }}">
    @csrf
    <div class="form-group">
    <input type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" id="exampleInputUsername1" placeholder="Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
    <div class="form-group">
    <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" id="exampleInputEmail1" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">
    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>

    <div class="form-group">
    <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" id="exampleInputPassword1" placeholder="Password" name="password" required autocomplete="new-password">
    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>

            <div class="form-group">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
               
            
                        </div>
   
    <div class="mt-3 d-grid gap-2">
        <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
            SIGN UP
        </button>
    </div>
    <div class="text-center mt-4 font-weight-light"> Already have an account? <a href="{{ route('login') }}" class="text-primary">Login</a>
    </div>
</form>
 @endsection           