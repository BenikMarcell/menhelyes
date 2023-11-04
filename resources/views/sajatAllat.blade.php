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

<div class="container">

    

    <div class="row">

        <h1 class="text-center mb-5">{{$allat->nev}}</h1>

        <div class="col-6">
            @if($allat->kep)
            <img class="card-img-top" src="{{ asset('storage/images/' . $allat->kep->src) }}" alt="Próba {{ $allat->kep->src }}">
            @endif
        </div>

        <div class="col-6">
            
            <p>{{$allat->leiras}}</p>
        </div>
        
    </div>

    <div class="row">

        <div class="col-6">
            <h6>{{$allat->kor}} hónapos</h6>
            <h6>{{$allat->nem}}</h6>
            <h6> {{$allat->ivar_allapot}}</h6>
            <h6>Chip: {{$allat->chip}}</h6>
            <h6>Színe: {{$allat->allat_szin->szin}}</h6>
            <h6>Faj: {{$allat->allat_faj->faj}}</h6>
        </div>

        

    </div>

    

</div>

@endsection