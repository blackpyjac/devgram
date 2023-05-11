@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p">
    <div class="row">
        <div class="col-8 offset-2">
            <div class="row mb-3">
                <label for="caption" class="col-md-4 col-form-label">Post Caption</label>
                <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" autocomplete="caption">

                @error('caption')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="row">
                <label for="caption" class="col-md-4 col-form-label">Post Image</label>
                <input type="file" name="image" id="image" class="form-control">
                @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="row pt-4">
                <button  type="button" class="btn btn-primary col-md-4">Add New Post</button>
            </div>
        </div>
    </div>
    </form>
</div>
@endsection
