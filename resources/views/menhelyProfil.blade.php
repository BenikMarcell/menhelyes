@extends('layouts.master')
@section('title', 'Profilom')
@section('content')

    <div class="container">

        @include('menhelyProfilNav')

        <!-- A szerkesztés után ez a success jön vissza -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


        @if (session('alert'))
            <div class="alert alert-danger">
                {{ session('alert') }}
            </div>
        @endif


        <div class="row">

            <?php
            use App\Models\Menhely;
            $email = auth()->user()->email;
            $menhely = Menhely::where('email', $email)->first();
            
            ?>

            <h1 class="text-center mb-5">{{ Auth::user()->name }}</h1>
            <!--<h4 class="text-center mb-5">{{ Auth::user()->id }}</h4>-->
            <!-- ide először beolvassuk, hogy melyik menhelről van szó
            aztán kivesszük a menhelyből az adatait és azokat írjuk alább.
            A képfeltöltés még hiányzik!
            -->
            <div class="col-6">
                @if ($menhely->kep)
                    <img class="img-fluid" src="{{ asset('storage/images/' . $menhely->kep->src) }}"
                        alt="Próba {{ $menhely->kep->src }}">
                @endif
            </div>

            <div class="col-6">
                <h3>Leírás:</h3>


                <p>{{ $menhely->menhely_leiras }}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <h4>Adatok:</h4>
                <div class="col">
                    <p>Irányítószám: {{ $menhely->irsz }}</p>
                    <p>Menhely neve: {{ $menhely->nev }}</p>
                    <p>Település: {{ $menhely->telepules }}</p>
                    <p>Utca, házszám: {{ $menhely->utca_hsz }}</p>
                    <p>Bankszámla: {{ $menhely->bankszamla_sz }}</p>
                    <p>Nyilvántartási szám: {{ $menhely->nyilv_szam }}</p>
                    <p>Adószám: {{ $menhely->adoszam }}</p>
                    <p>Email: {{ $menhely->email }}</p>
                    <p>Telefon: {{ $menhely->telefon }}</p>
                    <p>Web-oldal: {{ $menhely->weblink }}</p>
                </div>

            </div>
            <div class="col-6">
                <a href="{{ route('menhely.edit') }}" class="btn">Menhely profil szerkesztése</a>
            </div>
        </div>

    </div>

@endsection
