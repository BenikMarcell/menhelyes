@extends('layouts.master')
@section('title',"Állatok")
@section('content')
@php
    $showLogo = true;
    $showMenhely = true;
    $showAllat = true;
    $showKapcsolat = true;
@endphp

<!-- Adott állat képe -->
<div class="container">
    <div class="row">
        <h1 class="text-center mb-5">{{$allat->nev}}</h1>
        <div class="col-6">
            @if($allat->kep)
            <img class="card-img-top" src="{{ asset('storage/images/' . $allat->kep->src) }}" alt="Próba {{ $allat->kep->src }}">
            @endif
        </div>
<!-- Adott állat leírása DB-ből -->
        <div class="col-6"> 
            <p>{{$allat->leiras}}</p>
        </div>
        
    </div>
<!-- Adott állat adatai -->
    <div class="row">
        <div class="col-6">
            <h6>Kor: {{$allat->kor}} hónap</h6>
            <h6>Neme: {{$allat->nem}}</h6>
            <h6>Ivarállapota: {{$allat->ivar_allapot}}</h6>
            <h6>Chip: {{$allat->chip}}</h6>
            <h6>Színe: {{$allat->allat_szin->szin}}</h6>
            <h6>Faj: {{$allat->allat_faj->faj}}</h6>
        </div>

    </div>
<!-- !!! Az állathoz tartozó menhely megtekintése nem működik -->
    <a id="visszaBtn" href="{{ url('/menhelyek') }}" class="btn rounded">Menhely megtekintése!</a>
<!-- Betettem egy plusz gombot ami visszavisz a keresésre, az állatok -->
    <a id="visszaBtn" href="{{ url('/allatok') }}" class="btn rounded mt-2">Tovább keresek!</a>

</div>

@endsection