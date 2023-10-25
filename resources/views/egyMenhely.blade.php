@extends('layouts.master')
@section('title',"Egy menhely")
@section('content')



    

    <div class="container">
        <div class="row">
          <div class="col order-last">
            <h4>Menhely bemutatása:</h4>
           <h2> <p class=" text-white">{{$menhely->menhely_leiras}}</p></h2>
          </div>
          <div class="col">
            <h4>{{$menhely->nev}}</h4>
            <h4>{{ $menhely->irsz }}</h4>
            <h4>{{ $menhely->telepules }}</h4>
            <h4>{{ $menhely->utca_hsz }}</h4>
            <h4>{{ $menhely->bankszamla_sz }}</h4>
            <h4>{{ $menhely->nyilv_szam }}</h4>
            <h4>{{ $menhely->adoszam }}</h4>
            <h4>{{ $menhely->email}}</h4>
            <h4>{{ $menhely->telefon}}</h4>
            <h4>{{ $menhely->weblink }}</h4>  
          </div>
          <div class="col order-first">
            <h4>Menhely neve:</h4>
            <h4>Irányítószám: </h4>
            <h4>Település</h4>
            <h4> Utca, házszám:  </h4>
            <h4>Bankszámla:</h4>
            <h4>Nyilvántartási szám: </h4>
            <h4>Adószám:</h4>
            <h4>Email:</h4>
            <h4>Telefon: +36 </h4>
            <h4>Web-oldal  </h4>

          </div>
        </div>
    </div>
        
<div class="container">
    <div class="row">
        <div class="col-12">
          
        </div>
    </div>
    
<div>
    <a id="visszaBtn" href="{{ url('/') }}" class="btn rounded">Vissza a Főoldalra!</a>
</div>

    



@endsection