@extends('layouts.app4')

@section('content')


<h1>Faj lista</h1>
<br>
<h3>views/fajok/index</h3>

@if (session('success'))
<div class="alert alert-success">
    {{session('success')}}

</div>
    
@endif


<ul>

    @foreach($fajok as $faj)
    <li>
        {{$faj->af_id}} --- {{$faj->faj}}
    </li>
        
    @endforeach
</ul>