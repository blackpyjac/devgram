@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-5 mb-2">
            <div class="card">
                <div class="card-body">
                    <div class="row mt-5 mb-4 justify-content-center">
                        <img src="/img/logo.png" style="width: 85px;" alt="">
                        <div class="text-center mt-2 fs-3 fw-bold">{{ env('APP_NAME') }}</div>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-9">
                                <input id="email" type="email" class="form-control bg-light @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email"  autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-9">
                                <input id="name" type="text" class="form-control bg-light @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" placeholder="Full Name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-9">
                                <input id="username" type="text" class="form-control bg-light @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}"  autocomplete="username" placeholder="Username">
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-9">
                                <input id="password" type="password" class="form-control bg-light @error('password') is-invalid @enderror" name="password"  autocomplete="new-password" placeholder="Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-9">
                                <input id="password-confirm" type="password" class="form-control bg-light" name="password_confirmation"  autocomplete="new-password" placeholder="Confirm Password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-10 d-grid gap-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
