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
                <li class="nav-item">
                    <a class="nav-link" href="./szerkesztesalatt">Önkénteseinknek</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./szerkesztesalatt">Alapítványoknak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./szerkesztesalatt">Kezdőknek</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./szerkesztesalatt">Tagjainknak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./kapcsolat">Kapcsolat</a>
                </li>
            </ul>

        </div>
    </nav>

    @yield("content")

</body>

</html>