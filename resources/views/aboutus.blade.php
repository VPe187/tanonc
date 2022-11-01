<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

<style type="text/css">
  body {
    font-family: 'Nunito', sans-serif;
    background: url({{ URL::asset('img/page_bg.jpg') }}) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;                
}

.title {
  
  margin-top: 3%;
  text-align:center;
  font-size: 35px;
  color:black;
}
.content_VP {
  position: absolute;
  top: 35%;
  left: 53%;
  transform: translate(-50%, -50%);
  height: 160px;
  overflow: hidden;
  font-family: "Lato", sans-serif;
  font-size: 18px;
  line-height: 25px;
  color: black;
}

.content_EJ {
  position: absolute;
  top: 40%;
  left: 48.7%;
  transform: translate(-50%, -50%);
  height: 160px;
  overflow: hidden;
  font-family: "Lato", sans-serif;
  font-size: 18px;
  line-height: 25px;
  color: black;
}

.content_LM {
  position: absolute;
  top: 45%;
  left: 48.3%;
  transform: translate(-50%, -50%);
  height: 160px;
  overflow: hidden;
  font-family: "Lato", sans-serif;
  font-size: 18px;
  line-height: 25px;
  color: black;
}

.content_FM {
  position: absolute;
  top: 50%;
  left: 48.3%;
  transform: translate(-50%, -50%);
  height: 160px;
  overflow: hidden;
  font-family: "Lato", sans-serif;
  font-size: 18px;
  line-height: 25px;
  color: black;
}

.content_AZS {
  position: absolute;
  top: 55%;
  left: 53%;
  transform: translate(-50%, -50%);
  height: 160px;
  overflow: hidden;
  font-family: "Lato", sans-serif;
  font-size: 18px;
  line-height: 25px;
  color: black;
}

.content_AI {
  position: absolute;
  top: 60%;
  left: 48.0%;
  transform: translate(-50%, -50%);
  height: 160px;
  overflow: hidden;
  font-family: "Lato", sans-serif;
  font-size: 18px;
  line-height: 25px;
  color: black;
}

.content_SJ {
  position: absolute;
  top: 65%;
  left: 48.7%;
  transform: translate(-50%, -50%);
  height: 160px;
  overflow: hidden;
  font-family: "Lato", sans-serif;
  font-size: 18px;
  line-height: 25px;
  color: black;
}

.content_SZD {
  position: absolute;
  top: 70%;
  left: 48.0%;
  transform: translate(-50%, -50%);
  height: 160px;
  overflow: hidden;
  font-family: "Lato", sans-serif;
  font-size: 18px;
  line-height: 25px;
  color: black;
}

.content_KZS {
  position: absolute;
  top: 75%;
  left: 48.0%;
  transform: translate(-50%, -50%);
  height: 160px;
  overflow: hidden;
  font-family: "Lato", sans-serif;
  font-size: 18px;
  line-height: 25px;
  color: black;
}
.content_TT {
  position: absolute;
  top: 80%;
  left: 48.0%;
  transform: translate(-50%, -50%);
  height: 160px;
  overflow: hidden;
  font-family: "Lato", sans-serif;
  font-size: 18px;
  line-height: 25px;
  color: black;
}
.content_HA {
  position: absolute;
  top: 85%;
  left: 48.0%;
  transform: translate(-50%, -50%);
  height: 160px;
  overflow: hidden;
  font-family: "Lato", sans-serif;
  font-size: 18px;
  line-height: 25px;
  color: black;
}
.content_FM2 {
  position: absolute;
  top: 90%;
  left: 48.0%;
  transform: translate(-50%, -50%);
  height: 160px;
  overflow: hidden;
  font-family: "Lato", sans-serif;
  font-size: 18px;
  line-height: 25px;
  color: black;
}
.content_BI {
  position: absolute;
  top: 95%;
  left: 48.0%;
  transform: translate(-50%, -50%);
  height: 160px;
  overflow: hidden;
  font-family: "Lato", sans-serif;
  font-size: 18px;
  line-height: 25px;
  color: black;
}

.content__container {
  font-weight: 600;
  overflow: hidden;
  height: 40px;
  padding: 0 80px;
}
/*
.content__container:before {
  content: "[";
  left: 0;
}
.content__container:after {
  content: "]";
  position: absolute;
  right: 0;
}
*/
.content__container:after, .content__container:before {
  position: absolute;
  top: 0;
  color: #16a085;
  font-size: 42px;
  line-height: 40px;
  -webkit-animation-name: opacity;
  -webkit-animation-duration: 2s;
  -webkit-animation-iteration-count: infinite;
  animation-name: opacity;
  animation-duration: 2s;
  animation-iteration-count: infinite;
}


.content__container__text {
  display: inline;
  float: left;
  margin: 0;
}
.content__container__list {
  margin-top: 0;
  padding-left: 300px;
  text-align: left;
  list-style: none;
  -webkit-animation-name: change;
  -webkit-animation-duration: 10s;
  -webkit-animation-iteration-count: infinite;
  animation-name: change;
  animation-duration: 10s;
  animation-iteration-count: infinite;
}

.content__container__list__item {
  line-height: 45px;
  margin: 0;
}

@-webkit-keyframes opacity {
  0%, 100% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
}
@-webkit-keyframes change {
  0%, 12.66%, 100% {
    transform: translate3d(0, 0, 0);
  }
  16.66%, 29.32% {
    transform: translate3d(0, -25%, 0);
  }
  33.32%, 45.98% {
    transform: translate3d(0, -50%, 0);
  }
  49.98%, 62.64% {
    transform: translate3d(0, -75%, 0);
  }
  66.64%, 79.3% {
    transform: translate3d(0, -50%, 0);
  }
  83.3%, 95.96% {
    transform: translate3d(0, -25%, 0);
  }
}
@keyframes opacity {
  0%, 100% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
}
@keyframes change {
  0%, 12.66%, 100% {
    transform: translate3d(0, 0, 0);
  }
  16.66%, 29.32% {
    transform: translate3d(0, -25%, 0);
  }
  33.32%, 45.98% {
    transform: translate3d(0, -50%, 0);
  }
  49.98%, 62.64% {
    transform: translate3d(0, -75%, 0);
  }
  66.64%, 79.3% {
    transform: translate3d(0, -50%, 0);
  }
  83.3%, 95.96% {
    transform: translate3d(0, -25%, 0);
  }
}
    
</style>

<body>
    
    <!------------------------------------------------------------- NAVBAR--------------------------------------------------------------------------------->
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
    </div>
 
<!------------------------------------------------------------- Content--------------------------------------------------------------------------------->
<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">Fejlesztésben részt vett</div>
                  <div class="card-body">
             
-->
<!-----------------------------------------------CÍMSOR------------------------------------------------------>  
                  <div class="title">
                        <p class="content_title" text-align="center">
                         A weboldal elkészítésében az alábbi fejlesztők vettek részt:
                        </p>
                  </div>
<!-----------------------------------------------vARGA PÉTER------------------------------------------------------>                          
                               <div class="content_VP">
                                    <div class="content__container">
                                          <p class="content__container__text">
                                          Varga Péter
                                          </p>
                                    
                                          <ul class="content__container__list">
                                            <li class="content__container__list__item">Fejlesztői környezet kialakítása</li>
                                            <li class="content__container__list__item">Tervezés</li>
                                            <li class="content__container__list__item">Frontend</li>
                                            <li class="content__container__list__item">Backend</li>
                                          </ul>
                                      </div>
                                </div>  

<!-----------------------------------------------ERŐS JÓZSEF------------------------------------------------------>
                                <div class="content_EJ">
                                      <div class="content__container">
                                           <p class="content__container__text">
                                           Erős József
                                           </p>
                                      
                                            <ul class="content__container__list">
                                              <li class="content__container__list__item">Tervezés</li>
                                              <!-- <li class="content__container__list__item">  Szervezés</li>-->
                                              <li class="content__container__list__item">Specifikáció</li> 
                                              <li class="content__container__list__item">Frontend</li>
                                              <li class="content__container__list__item">Backend</li>
                                            </ul>
                                        </div>
                                </div>

<!-----------------------------------------------LISÓCZKI MIHÁLY------------------------------------------------------>
                                <div class="content_LM">
                                      <div class="content__container">
                                          <p class="content__container__text">
                                          Lisóczki Mihály
                                          </p>
                                        
                                           <ul class="content__container__list">
                                              <li class="content__container__list__item">Tervezés</li>
                                              <li class="content__container__list__item">Szervezés</li>
                                              <li class="content__container__list__item">Frontend</li>
                                              <li class="content__container__list__item">Backend</li> 
                                            </ul>
                                        </div>
                                </div>
<!-----------------------------------------------FEKETE MIKLÓS------------------------------------------------------>
                                <div class="content_FM">
                                      <div class="content__container">
                                          <p class="content__container__text">
                                           Fekete Miklós
                                           </p>
                        
                                            <ul class="content__container__list">
                                              <li class="content__container__list__item">Tervezés</li>
                                              <li class="content__container__list__item">Szervezés</li>
                                              <li class="content__container__list__item">Backend</li>
                                              <li class="content__container__list__item">Frontend</li>
                                            </ul>
                                        </div>
                                </div>
<!-----------------------------------------------APPONYI ZSOLT------------------------------------------------------>
                                <div class="content_AZS">
                                      <div class="content__container">
                                          <p class="content__container__text">
                                           Apponyi Zsolt
                                           </p>
                        
                                          <ul class="content__container__list">
                                              <li class="content__container__list__item">Fejlesztői környezet kialakítása</li>
                                              <li class="content__container__list__item">Weboldal publikálása</li>
                                              <li class="content__container__list__item">Frontend</li>
                                              <li class="content__container__list__item">Backend</li>
                                            </ul>
                                        </div>
                                 </div>

 <!-----------------------------------------------ÁBRAHÁM IMRE------------------------------------------------------>
                                <div class="content_AI">
                                      <div class="content__container">
                                          <p class="content__container__text">
                                           Ábrahám Imre
                                           </p>
                        
                                          <ul class="content__container__list">
                                              <li class="content__container__list__item">Tervezés</li>
                                              <li class="content__container__list__item">Frontend</li>
                                              <li class="content__container__list__item">Tervezés</li>
                                              <li class="content__container__list__item">Frontend</li>
                                            </ul>
                                        </div>
                                 </div>    
                                 
<!-----------------------------------------------SÁNDOR JÁNOS------------------------------------------------------>
                                <div class="content_SJ">
                                      <div class="content__container">
                                          <p class="content__container__text">
                                           Sándor János
                                           </p>
                        
                                          <ul class="content__container__list">
                                              <li class="content__container__list__item">Specifikáció</li>
                                              <li class="content__container__list__item">Specifikáció</li>
                                              <li class="content__container__list__item">Specifikáció</li>
                                              <li class="content__container__list__item">Specifikáció</li>
                                            </ul>
                                        </div>
                                 </div>                                 
<!-----------------------------------------------SZILÁGYI DÁNIEL------------------------------------------------------>
                                <div class="content_SZD">
                                      <div class="content__container">
                                          <p class="content__container__text">
                                           Szilágyi Dániel
                                           </p>
                        
                                          <ul class="content__container__list">
                                              <li class="content__container__list__item">Frontend</li>
                                              <li class="content__container__list__item">Frontend</li>
                                              <li class="content__container__list__item">Frontend</li>
                                              <li class="content__container__list__item">Frontend</li>
                                            </ul>
                                        </div>
                                 </div>  
<!-----------------------------------------------KALAKAI ZSOLT------------------------------------------------------>
                                  <div class="content_KZS">
                                      <div class="content__container">
                                          <p class="content__container__text">
                                           Kalakai Zsolt
                                           </p>
                        
                                          <ul class="content__container__list">
                                              <li class="content__container__list__item">Frontend</li>
                                              <li class="content__container__list__item">Frontend</li>
                                              <li class="content__container__list__item">Frontend</li>
                                              <li class="content__container__list__item">Frontend</li>
                                            </ul>
                                        </div>
                                 </div>
<!-----------------------------------------------TÓTH TÍMEA------------------------------------------------------>
                                 <div class="content_TT">
                                      <div class="content__container">
                                          <p class="content__container__text">
                                           Tóth Tímea
                                           </p>
                        
                                          <ul class="content__container__list">
                                              <li class="content__container__list__item">Frontend</li>
                                              <li class="content__container__list__item">Frontend</li>
                                              <li class="content__container__list__item">Frontend</li>
                                              <li class="content__container__list__item">Frontend</li>
                                            </ul>
                                        </div>
                                 </div>
<!-----------------------------------------------HUDÁK ATTILA------------------------------------------------------>
                                 <div class="content_HA">
                                      <div class="content__container">
                                          <p class="content__container__text">
                                           Hudák Attila
                                           </p>
                        
                                          <ul class="content__container__list">
                                              <li class="content__container__list__item">Frontend</li>
                                              <li class="content__container__list__item">Frontend</li>
                                              <li class="content__container__list__item">Frontend</li>
                                              <li class="content__container__list__item">Frontend</li>
                                            </ul>
                                        </div>
                                 </div>          
<!-----------------------------------------------FAZEKAS MÁTÉ------------------------------------------------------>
                                 <div class="content_FM2">
                                      <div class="content__container">
                                          <p class="content__container__text">
                                           Fazekas Máté
                                           </p>
                        
                                          <ul class="content__container__list">
                                              <li class="content__container__list__item">Backend</li>
                                              <li class="content__container__list__item">Backend</li>
                                              <li class="content__container__list__item">Backend</li>
                                              <li class="content__container__list__item">Backend</li>
                                            </ul>
                                        </div>
                                 </div>    
<!-----------------------------------------------BERECZKI ISTVÁN------------------------------------------------------>
                                 <div class="content_BI">
                                      <div class="content__container">
                                          <p class="content__container__text">
                                           Bereczki István
                                           </p>
                        
                                          <ul class="content__container__list">
                                              <li class="content__container__list__item">Tervezés</li>
                                              <li class="content__container__list__item">Tervezés</li>
                                              <li class="content__container__list__item">Tervezés</li>
                                              <li class="content__container__list__item">Tervezés</li>
                                            </ul>
                                        </div>
                                 </div>                     
<!--
                  </div>
                </div>
              </div>
          </div>
      </div>
  </div>
-->
  <main class="py-4 mt-4">
            <div class="content" style = "min-height: 700px">
                @yield('content')
            </div>
        </main>          
  @include('footer')
  </body>
</html>