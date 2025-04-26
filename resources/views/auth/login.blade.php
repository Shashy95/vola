@extends('auth.layout')
@section('title', 'Login')

@section('content')
<h6 class="font-weight-light">Sign in to continue.</h6>
    <form class="pt-3" method="POST" action="{{ route('login') }}">
        @csrf
    <div class="form-group">
    <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
    id="exampleInputEmail1" placeholder="Email">

    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
    <div class="form-group">
    <input id="exampleInputPassword1" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required 
    autocomplete="current-password" placeholder="Password">

    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
    <div class="mt-3 d-grid gap-2">
        <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
            SIGN IN
        </button>
    </div>
    
    
    <div class="text-center mt-4 font-weight-light"> Don't have an account? <a href="{{ route('register') }}" class="text-primary">Create</a>
    </div>
</form>

 @endsection             