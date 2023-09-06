@extends('layouts.app3')

@section('content')


<h1>Szín lista</h1>
<br>
<h3>views/szinek/index</h3>

@if (session('success'))
<div class="alert alert-success">
    {{session('success')}}

</div>
    
@endif


<ul>

    @foreach($szinek as $szin)
    <li>
        {{$szin->szin_id}} --- {{$szin->szin}}
    </li>
        
    @endforeach
</ul>