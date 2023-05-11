@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://cdn.sanity.io/images/6jm1ps9z/production/1cd56065ba41bd6130ba1d716cdaca734c78b07f-1080x1080.png"
                alt="" style="height: 140px;" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="">Add new post</a>
            </div>
            <div class="d-flex">
                <div class="pe-5"><strong>10</strong> post</div>
                <div class="pe-5"><strong>133</strong> followers</div>
                <div class="pe-5"><strong>822</strong> following</div>
            </div>
            <div class="pt-4"><span class="fw-bold">{{$user->profile->title}}</span> <span class="text-muted">she/her</span>
            </div>
            <div class="text-muted">Editor</div>
            <div class="d-flex flex-column mb-3">
               <!--  <div class="">📌 Software Engineer</div>
                <div class="">👩‍💻 Back-end Developer</div>
                <div class="">Personal account: <a href="#" class="text-decoration-none">@dianablack98</a></div> -->
                <div class="">{{ $user->profile->description }}</div>
                <div><a href="{{ $user->profile->url}}"
                        class="text-decoration-none fw-bold">{{$user->profile->url ?? 'NA' }}</a></div>
            </div>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-4">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_KGO7ytVvO3IxzQtk6qNGE5g5x7ZuzdUzXkUR29LZdsdwsEkUFTSoOkSaAUj7Qrnq09s&usqp=CAU"
            class="w-100 h-100" >
        </div>
        <div class="col-4"><img
                src="https://windowsreport.com/wp-content/uploads/2021/03/Best-coding-browser-extensions.jpg"
                class="w-100 h-100">
        </div>
        <div class="col-4"><img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZFDNNbl2Yjl747vJ0pqmVkBoIumYR3THUdA&usqp=CAU"
                class="w-100 h-100"></div>
    </div>
</div>
@endsection