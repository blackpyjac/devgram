@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body mb-5">
                        <div class="row mt-5 justify-content-center">
                            <img src="/img/logo.png" style="width: 85px;" alt="">
                            <div class="text-center mt-2 fs-2" style="font-family: 'Lobster', cursive;">{{ env('APP_NAME') }}
                            </div>
                            <div class="col-md-9 text-center mt-2 fs-5 fw-bold text-black">
                                Trouble logging in?
                            </div>
                            <p class="col-md-9 text-center mt-2 fs-7 text-muted ">
                                Enter your email and we'll send you a link to get reset your password.
                            </p>
                        </div>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="row mb-3 justify-content-center">
                                <div class="col-md-9">
                                    <input id="email" type="email"
                                        class="form-control bg-light @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus
                                        placeholder="Email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0 justify-content-center">
                                <div class="col-md-9 d-grid gap-2 ">
                                    <button type="submit" class="btn btn-primary fw-bold">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="row justify-content-center mt-4 ">
                            <div class="col-md-9">
                                <div class="text-muted divider fw-bold"><span>OR</span></div>
                            </div>
                            <div class="col-md-9 text-center">
                                <a class="btn btn-link text-decoration-none fw-bold text-black"
                                    href="{{ route('register') }}">{{ __('Create new account') }}</a>
                            </div>
                        </div>
                    </div>
                   
                        <div class="card-footer text-center">
                            <a href="{{ route('login') }}" class="btn btn-link text-decoration-none text-black fw-bold">Back to login</a>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
