<div class="container d-flex  justify-content-center">
    <div class="row">
        <nav class="navbar navbar-expand-sm">
            <div class="container-fluid">
                <div class="row w-100">
                    
                    <div class="col-12">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="btn my-2" href="{{ url('menhelyAllatai') }}">Állataim</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn my-2" href="{{ url('menhelyAdomanyai') }}">Adományaim</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn my-2" href="{{ route('menhelyProfil') }}">Profilom</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn my-2" href="{{ url('./userLista') }}">Felhasznaló kezelés</a>
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </nav>
    </div>
</div>
