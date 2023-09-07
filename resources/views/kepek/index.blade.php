@extends('layouts.app5')

@section('content')


<h1>Képek listája</h1>
<br>
<h3>views/kepek/index <br> Kinél és hol jelenik meg?</h3>

@if (session('success'))
<div class="alert alert-success">
    {{session('success')}}

</div>
    
@endif


<ul>

    @foreach($kepek as $kep)
    <li>
        {{$kep->ak_id}} --- {{$kep->kep}}
    </li>
        
    @endforeach
</ul>