@extends('layouts.master')
@section('title',"Egy menhely")
@section('content')



<div class="container">

    <div class="row">
        @if (count($menhelyek) > 0)
       
        @foreach ($menhelyek as $menhely)
        <h1>A következőt találtuk:</h1>

        <div class="container">
            <div class="row">
              <div class="col order-last">
                <h2> <p class=" text-white">{{$menhely->menhely_leiras}}</p></h2>
              </div>
              <div class="col">
                <h6>{{$menhely->nev}}</h6>
                <h6>{{ $menhely->irsz }}</h6>
                <h6>{{ $menhely->telepules }}</h6>
                <h6>{{ $menhely->utca_hsz }}</h6>
                <h6>{{ $menhely->bankszamla_sz }}</h6>
                <h6>{{ $menhely->nyilv_szam }}</h6>
                <h6>{{ $menhely->adoszam }}</h6>
                <h6>{{ $menhely->email}}</h6>
                <h6>{{ $menhely->telefon}}</h6>
                <h6>{{ $menhely->weblink }}</h6>  
              </div>
              <div class="col order-first">
                <h6>Menhely neve:</h6>
                <h6>Irányítószám: </h6>
                <h6>Település</h6>
                <h6> Utca, házszám:  </h6>
                <h6>Bankszámla:</h6>
                <h6>Nyilvántartási szám: </h6>
                <h6>Adószám:</h6>
                <h6>Email:</h6>
                <h6>Telefon: +36 </h6>
                <h6>Web-oldal  </h6>
              </div>
            </div>
          </div>
          @endforeach
          @else
          <div class="text-center">
            <h1>Nem találtunk ilyen név alatt menhelyet!</h1>
          </div>
           @endif
    </div>
    
</div>
<div class="container">
    
    

  <div>
       <a id="visszaBtn" href="{{ url('/') }}" class="btn rounded">Vissza a Főoldalra!</a>
  </div>

</div>
@endsection


