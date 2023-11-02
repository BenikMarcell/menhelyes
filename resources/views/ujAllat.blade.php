@extends('layouts.master')
@section('title',"Állatok")
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
            @if(isset($allat->kep))
            <img class="card-img-top" src="{{ asset('storage/images/' . $allat->kep->src) }}" alt="Próba {{ $allat->kep->src }}">
            <h4>{{ $allat->kep->kep_cim }}</h4>
            @endif
        </div>
        <div class="col-4 m-5">

            <h3>Az elmentett adatok</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-4 m-5">
            <h1 class="text-center m-5">{{$allat->nev}}</h1>
            <h6>{{$allat->kor}} hónapos</h6>
            <h6>{{$allat->nem}}</h6>
            <h6> {{$allat->ivar_allapot}}</h6>
            <h6>Chip: {{$allat->chip}}</h6>
            <h6>Színe: {{$allat->allat_szin->szin}}</h6>
            <h6>Faj: {{$allat->allat_faj->faj}}</h6>
            <div>
                <p><h6>Állat leírása:</h6> {{$allat->leiras}}</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-4 m-5">
                <h4>További képek</h4>
                @if($allat->allat_kep->isNotEmpty())
                @foreach($allat->allat_kep as $kep)
               <img class="card-img-top" src="{{ asset('storage/images/' . $kep->src) }}" alt="Kép alt szöveg">
        </div>
        @endforeach
    </div>
    @endif
            
    

@endsection