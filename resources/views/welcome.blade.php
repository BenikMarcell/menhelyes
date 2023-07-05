<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fooldal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<html >
    
    <body >
        <div>
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            

                                    <nav class="navbar navbar-expand-sm bg-dark navbar-light mb-5">
                                        <div class="container-fluid">
                                          <ul class="navbar-nav">
                                            <li class="nav-item">
                                              <a class="nav-link text-light" href="#">Főoldal</a>
                                            </li>
                                           <li class="nav-item">
                                              <a class="nav-link text-light" href="#">Menhelyek</a>
                                            </li>
                                            <li class="nav-item">
                                              <a class="nav-link text-light" href="#">Állatok</a>
                                            </li>
                                          </ul>
                                        </div>
                                    </nav>
                                
                                    <section>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-6 mt-5 p-5">
                                                    <h1>ITT LESZ VALAMI</h1>
                                                </div>
                                                <div class="col-6 mt-5 p-5">
                                                    <h1>ITT LESZ VALAMI</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                
                                    <section class="container-fluid text-center m-3 p-3">
                                        <h1>ITT LESZ VALAMI LAPOZÓS DOLOG</h1>
                                    </section>
                                
                                    <footer class="bg-dark text-light text-center">
                                        <div class="container-fluid">
                                            <h3>EZ ITT A LÁBLÉC</h3>
                                        </div>
                                    </footer>

                                </div>

                                
                    
                </div>
            </div>
        </div>
    </body>
</html>