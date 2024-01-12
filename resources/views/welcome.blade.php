@extends('layouts.master')
@section('title','Főoldal')


@section('content')
@php
    $showLogo = true;
    $showMenhely = true;
    $showAllat = true;
    $showKapcsolat = true;
@endphp


<h1 class="text-center m-3 kekText">Üdvözlünk a MenhelyHUB-on</h1>

<div class="container">
    <div class="row p-3" style="background-color: #a2b6b2;">
        <div class="col-12 col-md-6">
            <img id="fooldalkep" src="./images/Welcome_Image.jpg" alt="fooldalkep" class="img-fluid">
        </div>
        <div class="col-12 col-md-6">
            <h2 class="text-center mb-3" >A MenhelyHUB célja</h2>
            <p class="mx-3">A Menhely HUB egy olyan weboldal ami összegyűjti és egyszerre mutatja a különböző menhelyek állatait a befogadni szándékozó felhasználók számára.
A menhelyek egy regisztrációval részesei lehetne a rendszernek, feltölthetik az állataikat és adományokat fogadhatnak.</p>

        </div>
    </div> <!-- </div> hozzáadva itt -->
</div>

<!-- Állat kártyák -->
<div class="container">    
    <div class="row justify-content-center">
        <h2 class="m-3">Néhány állatka:</h2>
        @foreach ($allatok as $key => $allat)
            <div class="col-12 col-md-4 menhely-card">
                <div class="card mb-2">
                        @if($allat->kep)
                            <img class="card-img-top" src="{{ asset('storage/images/' . $allat->kep->src) }}" alt="Próba {{ $allat->kep->src }}"> 
                        @endif
                        <div class="card-body">
                        <h4 class="card-title">{{$allat->nev}}</h4>
                        <h6>{{$allat->kor}} hónapos</h6>
                        <h6>{{$allat->nem}}</h6>
                        <a href="{{ route('egyAllat', ['a_id' => $allat->a_id]) }}" class="btn rounded">Ismerj meg!</a>
                        
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Menhely kártyák -->
<div class="container">
    <div class="row justify-content-center">
        <h2 class="m-3">Állatmenhely partnereink:</h2>
        @foreach ($menhelyek as $key => $menhely)
        <div class="col-12 col-md-4 menhely-card">
            <div class="card mb-2">
                        @if($menhely->kep)
                        <img class="card-img-top " src="{{ asset('storage/images/' . $menhely->kep->src) }}" alt="Próba {{ $menhely->kep->src }}">
                        @endif
                        <div class="card-body">
                        <h4 class="card-title">{{$menhely->nev}}</h4>
                        <h6>{{$menhely->telepules}}</h6>
                        <h6>{{$menhely->telefon }}</h6>
                        <a href="{{ route('egyMenhely', ['m_id' => $menhely->m_id]) }}" class="btn rounded">Részletes adatok</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection