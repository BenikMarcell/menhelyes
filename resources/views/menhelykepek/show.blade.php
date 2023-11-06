@extends('layouts.master')
@section('title',"Menhelyek")
@section('content')
@include('menhelyProfilNav')
<h1>Megjelenítés </h1>





      //   Menhely kép id:         {{$kep->mk_id}}  <br>
      //   Cím:             {{$kep->kepCim}}  <br>
      //   Alt             {{$kep->alt}}  <br>
      //   Leírás          {{$kep->leiras}}  <br>
      <img src="{{ asset('storage/images/'. $kep->src) }}" alt="{{$kep->src}}"> <br>
      
      
      <a class=" btn d-grid gap-2 col-1 mx-auto mb-3" href="{{ route('menhelykepek.index') }}">Képek listája</a>
      

@endsection