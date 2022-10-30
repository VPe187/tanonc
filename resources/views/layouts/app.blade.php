<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Tanonc') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> -->

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @yield('script_head')
</head>

<style>
body {
    font-family: 'Nunito', sans-serif;
    background: url({{ URL::asset('img/page_bg.jpg') }}) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;                
}
</style>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('home') }}"><img src="{{ URL::asset('img/tanonc_logo_atlatszo.png') }}" alt="Logo" height="50px"></a>&nbsp;
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" area-expanded="false" area-label="Togglenavigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mainNavbar">

                    <!-- Baloldali menü -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ url('home') }}"><i class="fa-btn fa-solid fa-house"></i>Nyitólap</a>
                        </li>
                        @guest
                        @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="importDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-btn fa-solid fa-database"></i>Adatok felvitele<!-- {{ __('Adat import') }}-->
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="importDropdown">
                                <li>
                                    <a href="{{ url('/masterdataimport') }}" class="dropdown-item" href="#">
                                        <i class="fa-btn fa-solid fa-file-import"></i>{{ __('KIR master') }}</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <h6 class="dropdown-header" href="#">
                                        &nbsp;<i class="fa-solid fa-database">&nbsp;&nbsp;</i>Importálás csv fájlból
                                    </h6>
                                    <li>
                                        <a href="{{ url('/familydataimport') }}" class="dropdown-item" href="#">
                                            <i class="fa-btn fa-solid fa-file-import"></i>{{ __('Family data (1)') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/socialdataimport') }}" class="dropdown-item" href="#">
                                            <i class="fa-btn fa-solid fa-file-import"></i>{{ __('Social status (2)') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/guardiandataimport') }}" class="dropdown-item" href="#">
                                            <i class="fa-btn fa-solid fa-file-import"></i>{{ __('Guardian (3)') }}
                                        </a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                </li>
                                <li>
                                    <h6 class="dropdown-header" href="#">
                                        &nbsp;&nbsp;<i class="fa-solid fa-database">&nbsp;</i>Rögzítés kézzel
                                    </h6>
                                    <li>
                                        <a href="{{ url('/familydatamanual') }}" class="dropdown-item" href="#">
                                            <i class="fa-btn fa-solid fa-file-import"></i>{{ __('Family data (1)') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/socialdatamanual') }}" class="dropdown-item" href="#">
                                            <i class="fa-btn fa-solid fa-file-import"></i>{{ __('Social status (2)') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/guardiandatamanual') }}" class="dropdown-item" href="#">
                                            <i class="fa-btn fa-solid fa-file-import"></i>{{ __('Guardian (3)') }}</a>
                                    </li>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="exportDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-btn fa-solid fa-cloud-arrow-down"></i>{{ __('Lekérdezések') }}</a>
                            <ul class="dropdown-menu" aria-labelledby="exportDropdown">
                                <li><a class="dropdown-item" href="{{ url('/uniquedataquery') }}"><i class="fa-btn fa-solid fa-user"></i>{{ __('Tanuló lekérdezése') }}</a></li>
                                <li><a class="dropdown-item" href="{{ url('/bulkdataquery') }}"><i class="fa-btn fa-solid fa-users"></i>{{ __('Csoportos lekérdezés') }}</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{ url('/exceldataexport') }}"><i class="fa-btn fa-sharp fa-solid fa-file-excel"></i>{{ __('Exportálás Excelbe') }}</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="adminDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-btn fa-solid fa-sliders"></i>{{ __('Beállítások') }}</a>
                            <ul class="dropdown-menu" aria-labelledby="adminDropdown">
                                <li><a class="dropdown-item" href="{{ url('users') }}"><i class="fa-btn fa-solid fa-users"></i>{{ __('Felhasználók') }}</a></li>
                            </ul>
                        </li>                        
                        @endguest
                    </ul>

                    <ul class="navbar-nav ms-auto">

                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}"><i class="fa-btn fa-solid fa-right-to-bracket"></i>{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"><i class="fa-btn fa-solid fa-address-card"></i>{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="userDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fa-btn fa-solid fa-user"></i>{{ Auth::user()->name }}
                                </a>

                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                    <li><a class="dropdown-item" href="{{ route('userprofile') }}"><i class="fa-btn fa-solid fa-id-card"></i>Profil</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fa-btn fa-solid fa-key"></i>Jelszó változtatás</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="fa-btn fa-solid fa-right-from-bracket"></i>{{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest

                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4 mt-4">
            <div class="content" style = "min-height: 600px">
                @yield('content')
            </div>
        </main>
    </div>
    
        @include('footer')
    
    </body>
</html>
