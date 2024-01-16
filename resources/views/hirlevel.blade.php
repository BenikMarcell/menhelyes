@extends('layouts.master')
@section('title',"Hírlevél")

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

        <div class="col-4"></div>

    </div>

</div>

@endsection