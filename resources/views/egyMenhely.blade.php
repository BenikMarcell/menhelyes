@extends('layouts.master')
@section('title', 'Egy menhely')
@section('content')
    @php
        $showLogo = true;
        $showMenhely = true;
        $showAllat = true;
        $showKapcsolat = true;
    @endphp





    <div class="container">
        <div class="row">

            <div class="col-md-6">
                @if ($menhely->kep)
                    <img class="img-fluid" src="{{ asset('storage/images/' . $menhely->kep->src) }}"
                        alt="Próba {{ $menhely->kep->src }}">
                @endif
            </div>

            <div class="col-md-6">
                <div class="row  mb-3">
                    <div> <!--class="col order-last"-->
                        <h4>Menhely bemutatása:</h4>
                        <p>{{ $menhely->menhely_leiras }}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <h6>Menhely neve:</h6>
                        <h6>Irányítószám: </h6>
                        <h6>Település</h6>
                        <h6>Utca, házszám: </h6>
                        <h6>Bankszámla:</h6>
                        <h6>Nyilvántartási szám: </h6>
                        <h6>Adószám:</h6>
                        <h6>Email:</h6>
                        <h6>Telefon: +36 </h6>
                        <h6>Web-oldal </h6>
                    </div>
                    <div class="col-6">
                        <h6>{{ $menhely->nev }}</h6>
                        <h6>{{ $menhely->irsz }}</h6>
                        <h6>{{ $menhely->telepules }}</h6>
                        <h6>{{ $menhely->utca_hsz }}</h6>
                        <h6>{{ $menhely->bankszamla_sz }}</h6>
                        <h6>{{ $menhely->nyilv_szam }}</h6>
                        <h6>{{ $menhely->adoszam }}</h6>
                        <h6>{{ $menhely->email }}</h6>
                        <h6>{{ $menhely->telefon }}</h6>
                        <h6>{{ $menhely->weblink }}</h6>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">

            </div>
        </div>

        <div>
            <a id="visszaBtn" href="{{ url('/menhelyek') }}" class="btn rounded">Vissza a Menhelyekhez!</a>
        </div>





    @endsection
