@extends('layouts.master')
@section('title',"Menhelyek")
@section('content')


<div class="container">
    <h1 class="text-center">Menhely Kereső</h1>
    <form class="form form-control p-3 m-3 text-center" action="#" method="post">
        <div class="col-6 p-3 m-3">
            <div class="inputMezo">
                <label for="allatfajta">Szűkítés név alapján:</label>
                <input class="form-control" type="text" placeholder="Írj be valamit">
            </div>
        </div>
        <div class="col-6 p-3 m-3 text-center">
            <div class="inputMezo">
                <label for="menhelyTelephelye">Menhely telephelye:</label>
                <select class="form-control" name="menhelyTelephelye" id="menhelyTelephelye" placeholder="Válassz telephelyet">
                    <option selected value="none">Válassz telephelyet</option>
                    <option value="Budapest">Budapest</option>
                    <option value="Debrecen">Debrecen</option>
                    <option value="Szeged">Szeged</option>
                    <option value="Sopron">Sopron</option>
                </select>
            </div>
        </div>
        <button class="btn rounded">Keress!</button>
    </form>
</div>

<div class="container">

    <div class="row">
        
        <div class="container">

            @foreach ($menhelyek as $key => $menhely) 
            @if ($key % 3 === 0)
                <div class="row">
            @endif
            <div class="col-md-3 m-4">
                <div class="card">
                    <img class="card-img-top" src="./images/menhelykep.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">{{$menhely->nev}}</h4>
                        <h6>{{$menhely->telepules}}</h6>
                        <h6>{{$menhely->menhely_leiras}}</h6>  
                            
                        </p>
                        <a href="./egyAllat" class="btn rounded">Bővebben</a>
                    </div>
                </div>
            </div>
            @if (($key + 1) % 3 === 0 || $loop->last)
                </div>
            @endif
        @endforeach   

        

@endsection