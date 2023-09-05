<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="./">Főoldal</a>
                </li>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Gazdit keresünk
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                          <li><a class="dropdown-item" href="./szerkesztesalatt">Keressünk együtt kedvencet</a></li>
                          <li><a class="dropdown-item" href="./szerkesztesalatt">Befogadás, Adaptáció</a></li>
                          <li><a class="dropdown-item" href="./szerkesztesalatt">Gondoskodj róluk, amíg gazdit találnak</a></li>
                          <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="./szerkesztesalatt">Választási kisokos</a></li>
                      <li><a class="dropdown-item" href="./szerkesztesalatt">GY.I.K</a></li>
                          
                        </ul>
                      </li>
                    </ul>
                  </div>

                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Hasznos tanácsok
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                          <li><a class="dropdown-item" href="./szerkesztesalatt">Tanácsok évszakokra bontva</a></li>
                          <li><a class="dropdown-item" href="./szerkesztesalatt">Betegségek</a></li>
                          <li><a class="dropdown-item" href="./szerkesztesalatt">Segítség, ha pénzügyi nehézségeid akadnának...</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="./szerkesztesalatt">Nevelési kisokos</a></li>
                          <li><a class="dropdown-item" href="./szerkesztesalatt">GY.I.K</a></li>
                              
                          
                          
                        </ul>
                      </li>
                    </ul>
                  </div>

                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Támogatási lehetőségek
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                          <li><a class="dropdown-item" href="./szerkesztesalatt">Havi támogatás</a></li>
                          <li><a class="dropdown-item" href="./szerkesztesalatt">Hagyaték</a></li>
                          <li><a class="dropdown-item" href="./szerkesztesalatt">Végrendelkezés</a></li>
                          <li><a class="dropdown-item" href="./szerkesztesalatt">Hírdetési felületek</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="./szerkesztesalatt">Szponzorálás</a></li>
                          <li><a class="dropdown-item" href="./szerkesztesalatt">GY.I.K</a></li>
                          
                        </ul>
                      </li>
                    </ul>
                  </div>

                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Önkéntesként segítek
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                          <li><a class="dropdown-item" href="./szerkesztesalatt">Az első lépések</a></li>
                          <li><a class="dropdown-item" href="./szerkesztesalatt">Tagjainknak</a></li>
                          <li><a class="dropdown-item" href="./szerkesztesalatt">Alapítványoknak</a></li>
                          <li><a class="dropdown-item" href="./szerkesztesalatt">GY.I.K</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="./szerkesztesalatt">Rendezvényeink</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           Küldetésünk
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                          <li><a class="dropdown-item" href="./szerkesztesalatt">Céljaink 2030-ig</a></li>
                          <li><a class="dropdown-item" href="./szerkesztesalatt">Rólunk</a></li>
                          <li><a class="dropdown-item" href="./szerkesztesalatt">Megvalósítás módjai</a></li>
                          <li><a class="dropdown-item" href="./szerkesztesalatt">Történetünk</a></li>
                          <li><a class="dropdown-item" href="./szerkesztesalatt">Gondoskodás alapelvei</a></li>
                          <li><a class="dropdown-item" href="./szerkesztesalatt">Oktatás, tanfolyamok</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="./szerkesztesalatt">Állatkínzás ellen</a></li>
                          
                        </ul>
                      </li>
                    </ul>
                  </div>



                <li class="nav-item">
                    <a class="nav-link" href="./kapcsolat">Kapcsolat</a>
                </li>
                
            </ul>

            
  
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Bejelentkezés menhelyek részére') }}</a>
                </li>
                @endif
                <!-- @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Regisztrálás') }}</a>
                    </li>
                @endif-->
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Kijelentkezés') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </nav>
    @yield("content")

    <footer class="bg-dark text-light" style="height: 8vh; display: flex; align-items: center; justify-content: center;">
        <div class="container-fluid">
            <div class="row">

                <div class="col-3">
                    <a style="text-decoration: none;  display: flex; align-items: center; justify-content: center;" href="./gyik">GyIK</a>
                </div>
                <div class="col-3">
                    <a style="text-decoration: none;  display: flex; align-items: center; justify-content: center;" href="./kapcsolat">Kapcsolat</a>
                </div>

                <div class="col-3" style="text-decoration: none;  display: flex; align-items: center; justify-content: center;">
                    <p>Készítette: A Menhelyes Csapat&copy;</p>
                </div>

                <div class="col-3">
                    <a style="text-decoration: none;  display: flex; align-items: center; justify-content: center;" href="./szerkesztesalatt">Rólunk</a>
                </div>

            </div>
        </div>

        




    </footer>

</body>

</html>