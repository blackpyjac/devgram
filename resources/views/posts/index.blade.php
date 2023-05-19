@extends('layouts.app')

@section('content')
    <div class="container text-center mt-3">
        <div class="row">
            <div class="col-md-8 col-sm-12">
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
                    <div class="card  bg-light mt-3">
                        <div class="card-body mt-5">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center ">
                                    <div class="border border-3 border-dark rounded-circle "
                                        style="width: 145px; height:145px;">
                                        <div class="mt-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="95" height="95"
                                                fill="currentColor" class="bi bi-camera" viewBox="0 0 16 16">
                                                <path
                                                    d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1v6zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z" />
                                                <path
                                                    d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zM3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
                                            </svg>

                                        </div>

                                    </div>

                                </div>
                                <div class="col-md-12 text-center">
                                    <div class="fs-1 fw-medium">No Posts Yet</div>
                                </div>
                            </div>


                        </div>

                    </div>
                @endif
            </div>
            <div class="col-md-4 d-sm-none d-md-block d-md-none d-lg-block">
                <div class="list-group">
                    <a href="/profile/{{ auth()->user()->id }}" class="list-group-item list-group-item-action d-flex justify-content-start align-items-center bg-light border border-0">
                        <img src="{{ auth()->user()->profile->profileImage() }}" alt="hugenerd" width="60"
                            height="60" class="rounded-circle">
                        <div class="ps-2">
                            <div class="fw-bold fs-6"><small>{{ auth()->user()->username }}</small></div>
                            <div class="fs-6 text-muted">{{ auth()->user()->name }}</div>
                        </div>
                    </a>
                    <div class="list-group-item  d-flex justify-content-between align-items-center bg-light border border-0 text-muted">
                        <div class="fw-bold fs-6">Suggested for you</div>
                        <a href="#" class="text-decoration-none fw-bold text-black"><small>See All</small></a>
                    </div>
                    <div href="" class="list-group-item list-group-item-action  d-flex justify-content-between align-items-center bg-light border border-0">
                        <img src="{{ auth()->user()->profile->profileImage() }}" alt="hugenerd" width="35"
                            height="35" class="rounded-circle">
                        <span class="badge bg-primary rounded-pill">1</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
