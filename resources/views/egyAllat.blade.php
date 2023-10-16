@extends('layouts.master')
@section('title',"Állatok")
@section('content')

<div class="container">

    

    <div class="row">

        <h1 class="text-center mb-5">Állat Neve</h1>

        <div class="col-6">
            <img class="profilkep" src="./images/kutya1.jpg" alt="profilkep">
        </div>

        <div class="col-6">
            <h3>Leírás:</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis reprehenderit excepturi facere incidunt recusandae quod tempore totam, temporibus autem sit, corrupti repellat reiciendis aspernatur. Commodi reiciendis sint quaerat? Harum, praesentium!</p>
        </div>
        
    </div>

    <div class="row">

        <div class="col-6">
            <h3>Adatok:</h3>
            <p>Állat adatai...</p>
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

    <a id="visszaBtn" href="./egyMenhely" class="btn rounded">Vissza a menhelyhez!</a>
</div>

@endsection