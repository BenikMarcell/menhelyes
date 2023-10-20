@extends('layouts.master')
@section('title',"Adományaim")
@section('content')

@include('menhelyProfilNav')


<div class="container">
    <h1 class="text-center mb-5">Adományaim:</h1>

    <table class="table table-striped">
        <tr>
            <th>Adomány ID</th>
            <th>Összeg</th>
            <th>Megjegyzés</th>
            <th>Dátum</th>
        </tr>
        @foreach ($adomanyok as $adomany)
        <tr>
            <td>{{$adomany->bt_id}}</td>
            <td>{{$adomany->total}}</td>
            <td>{{$adomany->status}}</td>
            <td>{{$adomany->beerkezes_idopontja}}</td>

        </tr>
        @endforeach
        
    </table>
    {{$adomanyok->links()}}
</div>


@endsection