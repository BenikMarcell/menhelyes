@extends('layouts.master')
@section('title', 'Profilom')
@section('content')

    <div class="container">

        @include('menhelyProfilNav')

        <!-- A szerkesztés után ez a success jön vissza -->
        @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
        @endif

        <div class="row">
            
            <?php
            use App\Models\Menhely;
            $email = auth()->user()->email;
            $menhely = Menhely::where('email', $email)->first();
            //$leiras = $menhely->menhely_leiras;
            ?>
            
            <h1 class="text-center mb-5">{{$email}}</h1>
            <h4 class="text-center mb-5">{{Auth::user()->id}}</h4>
<!-- ide először beolvassuk, hogy melyik menhelről van szó 
aztán kivesszük a menhelyből az adatait és azokat írjuk alább.
A képfeltöltés még hiányzik!
-->
            <div class="col-6">
                <img class="profilkep" src="/images/menhelykep.jpg" alt="profilkep">
            </div>

            <div class="col-6">
                <h3>Leírás:</h3>

                
                <p>{{$menhely->menhely_leiras}}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <h3>Adatok:</h3>
                <div class="col">
                    <h4>Menhely neve: {{$menhely->nev}}</h4>
                    <h4>Irányítószám: {{ $menhely->irsz }}</h4>
                    <h4>Település: {{ $menhely->telepules }}</h4>
                    <h4>Utca, házszám: {{ $menhely->utca_hsz }}</h4>
                    <h4>Bankszámla: {{ $menhely->bankszamla_sz }}</h4>
                    <h4>Nyilvántartási szám: {{ $menhely->nyilv_szam }}</h4>
                    <h4>Adószám: {{ $menhely->adoszam }}</h4>
                    <h4>Email: {{ $menhely->email}}</h4>
                    <h4>Telefon: {{ $menhely->telefon}}</h4>
                    <h4>Web-oldal: {{ $menhely->weblink }}</h4>  
                  </div>
                  
            </div>
            <div class="col-6">
                <a href="{{ route('menhely.edit') }}" class="btn">Menhely profil szerkesztése</a>
            </div>
        </div>

    </div>

@endsection
