@extends('layouts.master')
@section('title',"Menhelyek")
@section('content')

<h1>Megjelenítés </h1>
<br>
<h3>views/menhelykepek/show</h3>






    --------------------------------- <br>
    --------------------------------- <br>

      //   Kép id:         {{$kep->mk_id}}  <br>
      //   Állat id        {{$kep->m_id}}  <br>
      //   Cím             {{$kep->kepCim}}  <br>
                           <img src="{{ asset('storage/images/'. $kep->src) }}" alt="{{$kep->src}}"> <br>
                           <img src="{{ url('storage/images/'.$kep->src) }}" alt="{{$kep->src}}"> <br>    
      //   alt             {{$kep->alt}}  <br>
      //   Leírás          {{$kep->leiras}}  <br>
      
      

      

@endsection