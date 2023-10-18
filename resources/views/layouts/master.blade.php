<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>

    <nav id="navbar" class="navbar myNavbar">
        <h1 id="focim">MenhelyHub</h1>
        <div class="container-fluid">
            
            <div class="col-3">
                <a href="./"><img id="logokep" src="{{asset('images/logo.png')}}" alt="Logo"></a>
            </div>
            <div id="nav-gombok" class="col-6">
                <a class="btn rounded" href="./menhelyek">Menhelyek</a>
                <a class="btn rounded" href="./allatok">Állatok</a>
                <a class="btn rounded" href="./kapcsolat">Kapcsolat</a>
            </div>
            <div class="col-3 center">
                <button id="login-btn" class=" rounded">
                    @guest

                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Bejelentkezés/Regisztráció</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item btn m-1" href="menhelyProfil">Profilom</a>
                            <a class="dropdown-item btn m-1" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Kijelentkezés') }}
                            </a>
                            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </button>
                
            </div>
            

  
            <!-- Right Side Of Navbar -->

        </div>
    </nav>


    <main>
        @yield("content")
    </main>


    <footer class="text-light">
        <div class="container-fluid">
            <div class="row center">
                <div class="col-1"></div>
                <div class="col-10">
                    <div class="row">
                        <div class="col-3 center">
                            <div class="ml-5">
                                <a class="btn" href="./gyik">GyIK</a>
                            </div>
                        </div>
                        <div class="col-3 center">
                            <div class="ml-5">
                                <a class="btn" href="./kapcsolat">Kapcsolat</a>
                            </div>
                        </div>
          
                        <div class="col-3 center">
                            <div class="ml-5">
                                <a class="btn" href="./kapcsolat">Hírlevél</a>
                            </div>
                        </div>
          
                        <div class="col-3 center">
                            <div class="ml-5">
                                <a class="btn" href="./">Rólunk</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1"></div>

            </div>
            <div class="row">
                <div class="col-5"></div>
                <div class="col-2 p-2">
                    <p id="keszitette">Készítette: A Menhelyes Csapat&copy;</p>
                </div>
                <div class="col-5"></div>
            </div>
        </div>
    </footer>

</body>

</html>