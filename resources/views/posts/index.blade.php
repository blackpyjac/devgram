@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($posts->count() > 0)
            @foreach ($posts as $post)
                <div class="row">
                    <div class="col-6 offset-3">
                        <a href="/profile/{{ $post->user->id }}">
                            <img src="/storage/{{ $post->image }}" class="w-100">
                        </a>
                    </div>
                </div>
                <div class="row pt-2 pb-4">
                    <div class="col-6 offset-3">
                        <div>
                            <p>
                                <span class="fw-bold">
                                    <a href="/profile/{{ $post->user->id }}" class=" text-decoration-none">
                                        <span class="text-dark">{{ $post->user->username }}</span>
                                    </a>
                                </span> {{ $post->caption }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    {{ $posts->links() }}
                </div>
            </div>
        @else
            <h1>test</h1>
            <i class="bi-alarm"></i>

        @endif
    </div>
@endsection
