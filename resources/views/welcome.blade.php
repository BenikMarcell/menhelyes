@extends('layouts.master')
@section('title','Főoldal')


@section('content')
@php
    $showLogo = true;
    $showMenhely = true;
    $showAllat = true;
    $showKapcsolat = true;
@endphp


<h1 class="text-center">Főoldal</h1>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-6">
            <img id="fooldalkep" src="./images/macska2.jpg" alt="fooldalkep" class="img-fluid">
        </div>
        <div class="col-12 col-md-6">
            <h2 class="text-center">A menhely HUB célja</h2>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia omnis minus dolor, ratione quia perferendis. Animi neque dolore, consequatur, debitis soluta voluptatum ipsam esse obcaecati aut, sit quae voluptates fugiat!
        </div>
    </div> <!-- </div> hozzáadva itt -->
</div>

<!-- Állat kártyák -->
<div class="container">    
    <div class="row">
        <h2>Néhány állatka:</h2>
        @foreach ($allatok as $key => $allat)
            <div class="col-md-3  allat-card">
                <div class="card mb-2">
                        @if($allat->kep)
                            <img class="card-img-top myCardImg" src="{{ asset('storage/images/' . $allat->kep->src) }}" alt="Próba {{ $allat->kep->src }}"> 
                        @endif
                        <div class="card-body">
                        <h4 class="card-title">{{$allat->nev}}</h4>
                        <h6>{{$allat->kor}} hónapos</h6>
                        <h6>{{$allat->nem}}</h6>
                        <a href="{{ route('egyAllat', ['a_id' => $allat->a_id]) }}" class="btn rounded">Bővebben</a>
                        
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Menhely kártyák -->
<div class="container">
    <div class="row">
        <h2>Állat menhely partnereink:</h2>
        @foreach ($menhelyek as $key => $menhely)
        <div class="col-md-3  menhely-card">
            <div class="card mb-2">
                        @if($menhely->kep)
                        <img class="card-img-top myCardImg" src="{{ asset('storage/images/' . $menhely->kep->src) }}" alt="Próba {{ $menhely->kep->src }}">
                        @endif
                        <div class="card-body">
                        <h4 class="card-title">{{$menhely->nev}}</h4>
                        <h6>{{$menhely->telepules}}</h6>
                        <h6>{{$menhely->telefon }}</h6>
                        <a href="{{ route('egyMenhely', ['m_id' => $menhely->m_id]) }}" class="btn rounded">Bővebben</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection