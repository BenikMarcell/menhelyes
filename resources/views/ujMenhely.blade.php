@extends('layouts.master')
@section('title',"Menhelyek")
@section('content')
@include('menhelyProfilNav')
@php
    $showLogo = false;
    $showMenhely = false;
    $showAllat = false;
    $showKapcsolat = false;
@endphp

    <div class="row">  
        <div class="col-4 m-5">
            @if(isset($menhely->kep))
            <img class="card-img-top" src="{{ asset('storage/images/' . $menhely->kep->src) }}" alt="Próba {{ $menhely->kep->src }}">
            <h4>{{ $menhely->kep->kepCim }}</h4>
            @endif
        </div>
        <div class="col-4 m-5">

            <h3>Az elmentett adatok</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-4 m-5">
            <h1 class="text-center m-5">{{$menhely->nev}}</h1>
            

                 <h1>Egyébb adatok</h1>

            <div>
                <p><h6>Menhely leírása:</h6> {{$menhely->leiras}}</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-4 m-5">
                <h4>További képek</h4>
                @if($menhely->menhely_kep->isNotEmpty())
                @foreach($menhely->menhely_kep as $kep)
               <img class="card-img-top" src="{{ asset('storage/images/' . $kep->src) }}" alt="Kép alt szöveg">
        </div>
        @endforeach
    </div>
    @endif
            
    

@endsection