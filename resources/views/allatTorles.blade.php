@extends('layouts.master')
@section('title',"Állatok")
@section('content')

<div class="container">
    <div class="row">
        <div class="col-4">

        </div>
        <div class="col-4 text-center">
            <h3 class="text-center">Valóban törölni szeretnéd ezt az állatot?</h3>
            <form class="form form-control" action="#">
                <label for="torles">Válassz:</label>
                <select class="form-control"  name="torles" id="torles" >
                    <option value="valassz" selected>Válassz...</option>
                    <option value="igen">Igen</option>
                    <option value="nem">Nem</option>
                </select>
                <a href="./menhelyProfil" class="btn rounded mt-3"  type="submit">Küldés!</a>
            </form>
        </div>
        <div class="col-4">

        </div>
    </div>
</div>

@endsection