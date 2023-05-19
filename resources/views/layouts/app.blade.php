<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-light">
    <div id="app">
        @auth
            <div class="container-fluid ">
                <div class="row flex-nowrap  ">
                    <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0">
                        <div
                            class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-black min-vh-100" style="border-right: 1px solid #dee2e6">
                            <a href="/"
                                class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-black text-decoration-none mt-3">
                                <div><img src="/svg/devgramLogo.svg" style="height: 17px;" class="pe-3"></div>
                                <span class="fs-3 d-none d-sm-inline">   <div style="font-family: 'Lobster', cursive;">Devgram</div></span>
                            </a>
                            <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                                id="menu">
                                <li class="nav-item">
                                    <a href="#" class="nav-link align-middle px-0 text-decoration-none text-black">
                                        <i class="fs-3 bi bi-house-door-fill"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0 align-middle text-decoration-none text-black">
                                        <i class="fs-4 bi bi-plus-square"></i> <span
                                            class="ms-1 d-none d-sm-inline">Create</span></a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0 align-middle text-decoration-none text-black">
                                        <i class="fs-4 bi bi-compass"></i> <span
                                            class="ms-1 d-none d-sm-inline">Explore</span></a>
                                </li>
                           
                                <li>
                                    <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                        <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span>
                                    </a>
                                    <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                        <li class="w-100">
                                            <a href="#" class="nav-link px-0"> <span
                                                    class="d-none d-sm-inline">Product</span> 1</a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-link px-0"> <span
                                                    class="d-none d-sm-inline">Product</span> 2</a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-link px-0"> <span
                                                    class="d-none d-sm-inline">Product</span> 3</a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-link px-0"> <span
                                                    class="d-none d-sm-inline">Product</span> 4</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0 align-middle">
                                        <i class="fs-4 bi-people"></i> <span
                                            class="ms-1 d-none d-sm-inline">Customers</span> </a>
                                </li>
                            </ul>
                            <hr>
                            <div class="dropdown pb-4">
                                <a href="#"
                                    class="d-flex align-items-center text-black text-decoration-none dropdown-toggle"
                                    id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30"
                                        class="rounded-circle">
                                    <span class="d-none d-sm-inline mx-1">loser</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark text-small shadow"
                                    aria-labelledby="dropdownUser1">
                                    <li><a class="dropdown-item" href="#">New project...</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
     
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col py-3">
                        @yield('content')        
                    </div>
                </div>
            </div>
        @else
            <main class="py-4 ">
                @yield('content')
            </main>
        @endauth

    </div>
    <footer class="text-center mb-3">
        <small>© 2023 Devgram from Blackpyjac</small>
    </footer>
</body>

</html>
