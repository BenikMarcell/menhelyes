@extends('layouts.master')
@section('title', 'Profilom')
@section('content')

    <div class="container">

        @include('menhelyProfilNav')

        <!-- A szerkesztés után ez a success jön vissza -->
        @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
        @endif

        <div class="row">
            
            <?php
            ?>
            <h1 class="text-center mb-5">{{Auth::user()->name}}</h1>

            <div class="col-6">
                <img class="profilkep" src="./images/menhelykep.jpg" alt="profilkep">
            </div>

            <div class="col-6">
                <h3>Leírás:</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis reprehenderit excepturi facere
                    incidunt recusandae quod tempore totam, temporibus autem sit, corrupti repellat reiciendis aspernatur.
                    Commodi reiciendis sint quaerat? Harum, praesentium!</p>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <h3>Adatok:</h3>
                
                <p>Menhely adatai...</p>
            </div>
            <div class="col-6">
                <a href="{{ route('menhely.edit') }}" class="btn">Menhely profil szerkesztése</a>
            </div>
        </div>

    </div>

@endsection
