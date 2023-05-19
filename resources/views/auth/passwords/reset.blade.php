@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body mb-5">
                    <div class="row mt-5 justify-content-center mb-3">
                        <img src="/img/logo.png" style="width: 85px;" alt="">
                        <div class="text-center mt-2 fs-2" style="font-family: 'Lobster', cursive;">{{ env('APP_NAME') }}
                        </div>
                        <div class="col-md-9 text-center mt-2 fs-5 fw-bold text-muted">
                            Reset Password
                        </div>
                    </div>
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-9">
                                <input id="email" type="email" class="form-control bg-light @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-9">
                                <input id="password" type="password" class="form-control bg-light @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-9">
                                <input id="password-confirm" type="password" class="form-control bg-light" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password">
                            </div>
                        </div>

                        <div class="row mb-0 justify-content-center">
                            <div class="col-md-9 d-grid gap-2">
                                <button type="submit" class="btn btn-primary fw-bold">
                                    {{ __('Reset Password') }}
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
                                href="{{ route('login') }}">{{ __('Back to login') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
