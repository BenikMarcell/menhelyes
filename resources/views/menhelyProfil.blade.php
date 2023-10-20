@extends('layouts.master')
@section('title',"Profilom")
@section('content')

<div class="container">

    <div class="row">

        @include('menhelyProfilNav')

        <h1 class="text-center mb-5">Menhely Neve</h1>

        <div class="col-6">
            <img class="profilkep" src="./images/menhelykep.jpg" alt="profilkep">
        </div>

        <div class="col-6">
            <h3>Leírás:</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis reprehenderit excepturi facere incidunt recusandae quod tempore totam, temporibus autem sit, corrupti repellat reiciendis aspernatur. Commodi reiciendis sint quaerat? Harum, praesentium!</p>
        </div>
        
    </div>

    <div class="row">

        <div class="col-6">
            <h3>Adatok:</h3>
            <p>Menhely adatai...</p>
        </div>
        <div class="col-6">
            <a href="menhelyregisztracio" class="btn">Szerkesztés</a>
        </div>
    </div>

</div>

@endsection