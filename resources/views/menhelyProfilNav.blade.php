<div class="container">
    <div class="row">
        <nav class="navbar navbar-expand-sm">
            <div class="container-fluid">
                <div class="row w-100">
                    <div class="col-3"></div>
                    <div class="col-12">
                        <ul class="navbar-nav ">
                            <li class="nav-item">
                                <a class="btn" href="{{ url('allatregisztracio') }}">Állat regisztrációja</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn" href="{{ url('menhelyAllatai') }}">Állataim</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn" href="{{ url('menhelyAdomanyai') }}">Adományaim</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn" href="{{ route('menhely.edit') }}">Profil szerkesztése</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn" href="{{ route('menhelykepek.index') }}">Képek listája/szerkesztése</a>


                            </li>
                        </ul>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
        </nav>
    </div>
</div>
