@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <!-- Itt meg kell nézni, hogy a bejelentkezett user ID szerepel-e már mint U_ID a menhelyeknél.
        A regisztráció után egyből a Menhely reg- oldalra kell dobjon és ott kell beállítani a U_ID-t.
        -->

                    <div class="card-body">

                        @if (Auth::user()->type == 1)
                            Sikeresen bejelentkeztél mint adminisztrátor!

                            Átirányítás a profilra...

                            <!--átadom a menhely adatokat-->

                            <meta http-equiv="refresh" content="2; url={{ route('menhelyProfil') }}">
                        @else
                            Sikeresen bejelentkeztél mint felhasználó!

                            Átirányítás a profilra...
                            <?php

                            echo (Auth::user()->id);

                            ?>

                            <meta http-equiv="refresh" content="2; url={{ route('menhelyProfil') }}">
                        @endif


                    </div>



                </div>
            </div>
        </div>
    </div>
@endsection
