@extends('layouts.master')
@section('title',"Menhelyek")
@section('content')
@php
    $showLogo = true;
    $showMenhely = true;
    $showAllat = true;
    $showKapcsolat = true;
@endphp


<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Menhely Kereső</h1>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4">
                        <form class="form form-control" form action="{{route('menhelyekKereses')}}" method="POST">
                            @csrf
                            <div>
                                <label for="nev">Szűkítés név alapján:</label>
                                <input class="form-control" id="nev" name="nev" type="text" placeholder="pl. Vagyunk">
                            </div>
                            <button class="btn m-5">Keress!</button>
                        </form>
                    </div>
                    <div class="col-4"></div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <h5 class="text-center">Menhelyek száma települések szerint:</h5>
                <div class="col-4"></div>
                <div class="col-4">
                    <ul>
                        @foreach ($telepulesek as $telepules)
                            <li>
                                <a href="{{ route('menhelyekByTelepules', $telepules->telepules) }}">
                                    {{ $telepules->count }} {{ $telepules->telepules }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
    </div>
</div>






<div class="container">

    <div class="row">
        <h3>Menhelyeink</h3>
        
        <div class="container">
            <div class="row">
                @foreach ($menhelyek as $key => $menhely)
                <div class="col-md-3">
                    <div class="card mb-3">
                            @if($menhely->kep)
                            <img class="card-img-top myCardImg" src="{{ asset('storage/images/' . $menhely->kep->src) }}" alt="Próba {{ $menhely->kep->src }}">
                            @endif
                            <div class="card-body">
                            <h4 class="card-title">{{$menhely->nev}}</h4>
                            <h6>{{$menhely->telepules}}</h6>
                            <h6>{{$menhely->menhely_leiras}}</h6>  
                                
                        
                            <a href="{{ route('egyMenhely', ['m_id' => $menhely->m_id]) }}" class="btn rounded">Bővebben</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div> 

        </div>




@endsection