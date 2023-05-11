@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PATCH')
            <div class="row">
                <h1>Edit Profile</h1>
            </div>
            <div class="form-group row">

                <div class="row mb-3">
                    <label for="title" class="col-md-4 col-form-label">Title</label>
                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror"
                        name="title" value="{{ old('title') }}" autocomplete="title">

                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row pt-4">
                    <button type="submit" class="btn btn-primary col-md-4">Add New Post</button>
                </div>

            </div>
        </form>
    </div>
@endsection
