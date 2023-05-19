@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="row justify-content-center mt-5">
            <div class="col-md-5 mb-2">
                <div class="card ">
                    <div class="card-body mb-5">
                        <div class="row mt-5 mb-4 justify-content-center">
                            <img src="/img/logo.png" style="width: 85px;" alt="">
                            <div class="text-center mt-2 fs-2" style="font-family: 'Lobster', cursive;">{{ env('APP_NAME') }}</div>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3 justify-content-center">
                                <div class="col-md-9">
                                    <input id="email" type="email"
                                        class="bg-light form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus
                                        placeholder="Email Address">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 justify-content-center">
                                <div class="col-md-9">
                                    <input id="password" type="password"
                                        class="bg-light form-control @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="current-password" placeholder="Password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-9 offset-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0 justify-content-center">
                                <div class="col-md-9 d-grid gap-2">
                                    <button type="submit" class="btn btn-primary rounded-3 fw-bold">
                                        {{ __('Log In') }}
                                    </button>
                                </div>
                                <div class="col-md-9 offset-md-3 mt-3">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link text-decoration-none" href="{{ route('password.request') }}">
                                            {{ __('Forgot Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
         
        </div>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <p>Don't have an account?<a class="btn btn-link text-decoration-none fw-bold"
                                        href="{{ route('register') }}">{{ __('Sign up') }}</a></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
