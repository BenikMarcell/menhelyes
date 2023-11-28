@extends('layouts.master')
@section('title',"Állat Törlés")
@section('content')

<div class="container">
    <div class="row">
        <div class="col-4">

        </div>
        <div class="col-4 text-center">
            <h3 class="text-center">Valóban törölni szeretnéd ezt az állatot?</h3>
            <form class="form form-control" method="POST">
                @csrf
                <label for="torles">Válassz:</label>
                <select class="form-control"  name="torles" id="torles" >
                    <option value="valassz" selected>Válassz...</option>
                    <option value="igen">Igen</option>
                    <option value="nem">Nem</option>
                </select>
                <button class="btn rounded mt-3"  type="submit">Küldés!</button>
            </form>
        </div>
        <div class="col-4">

        </div>
    </div>
</div>

@endsection