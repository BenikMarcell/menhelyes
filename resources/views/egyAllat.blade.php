@extends('layouts.master')
@section('title',"Állatok")
@section('content')

<div class="container">

    

    <div class="row">

        <h1 class="text-center mb-5">{{$allat->nev}}</h1>

        <div class="col-6">
            <img class="profilkep" src="./images/kutya1.jpg" alt="profilkep">
        </div>

        <div class="col-6">
            
            <p>{{$allat->leiras}}</p>
        </div>
        
    </div>

    <div class="row">

        <div class="col-6">
            <h6>{{$allat->kor}} hónapos</h6>
            <h6>{{$allat->nem}}</h6>
            <h6>{{$allat->ivar_allapot}}</h6>
            <h6>{{$allat->chip}}</h6>
        </div>

        <div class="col-6 text-center">
            <form class="form form-control" action="#">
                <h3>Adakoznék:</h3>
                <div>
                    <label for="bankszamlaSzam">Bankszámlaszám:</label>
                    <input class="form-control" type="text" name="bankszamlaSzam">
                </div>
                <div>
                    <label for="osszeg">Összeg:</label>
                    <input class="form-control" type="number" name="osszeg">
                </div>
                <div>
                    <label for="uzenet">Üzenet:</label>
                    <input class="form-control" type="text" name="uzenet">
                </div>
                <button id="donateBtn" class="btn rounded mt-3">Küldés!</button>
            </form>
        </div>

    </div>

    <a id="visszaBtn" href="{{ url('/') }}" class="btn rounded">Vissza a Főoldalra!</a>

</div>

@endsection