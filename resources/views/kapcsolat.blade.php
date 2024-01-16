@extends('layouts.master')
@section('title',"Kapcsolat")

@section('content')
@php
    $showLogo = true;
    $showMenhely = true;
    $showAllat = true;
    $showKapcsolat = true;
@endphp


<div class="container-fluid">

    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <h1>Kapcsolat!</h1>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Név:</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Név">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email-cím:</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nev@nev.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Szöveg:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                    placeholder="Valamilyen szöveg..."></textarea>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto mb-3">
                <button type="button" class="btn">Beküld!</button>
            </div>
            <div class="col-4"></div>
        </div>
<!-- kivettem a hirlevel formot mert külön oldalra került 
        <div class="col-6">
            <h1>Feliratkozás a hírlevélre!</h1>
            <div class="mb-3">
                <label class="form-label" for="nev">Név: </label>
                <input class="form-control" type="text" name="nev" placeholder="Név">
            </div>
            <div class="mb-3">
                <label class="form-label" for="email">Email-cím: </label>
                <input class="form-control" type="email" name="email" placeholder="nev@nev.com">
            </div>
            <div class="d-grid gap-2 col-6 mx-auto mb-3">
                <button type="button" class="btn">Kérem a hírlevelet!</button>
            </div>
        </div>
-->
    </div>

</div>

@endsection