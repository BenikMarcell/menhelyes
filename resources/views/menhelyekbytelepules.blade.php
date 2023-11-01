@extends('layouts.master')
@section('title',"Menhelyek")
@section('content')
@php
    $showLogo = true;
    $showMenhely = true;
    $showAllat = true;
    $showKapcsolat = true;
@endphp

<div class="container-fluid">
    <div class="col-12">
        
            <h6>Menhelyek a kiválasztott településen: </h6>
            <h3>{{ $telepules }}</h3>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Név</th>
                        <th>Ir. szám</th>
                        <th>Település</th>
                        <th>Utca, házszám</th>
                        <th>Bankszámla szám</th>
                        <th>Nyilvántartási szám</th>
                        <th>Adószám</th>
                        <th>Email</th>
                        <th>Telefon</th>
                        <th>Web</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($menhelyek as $menhely)
                        <tr>
                            <td>{{ $menhely->nev }}</td>
                            <td>{{ $menhely->irsz }}</td>
                            <td>{{ $menhely->telepules }}</td>
                            <td>{{ $menhely->utca_hsz }}</td>
                            <td>{{ $menhely->bankszamla_sz }}</td>
                            <td>{{ $menhely->nyilv_szam }}</td>
                            <td>{{ $menhely->adoszam }}</td>
                            <td>{{ $menhely->email}}</td>
                            <td>{{ $menhely->telefon}}</td>
                            <td>{{ $menhely->weblink }}</td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
</div>


@endsection