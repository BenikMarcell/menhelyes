@extends('layouts.master')
@section('title',"Állatok")
@section('content')



<div class="container">


<h1>Állat lista </h1>
<br>
<h3>views/bevall/index</h3>

@if (session('success'))
<div class="alert alert-success">
    {{session('success')}}

</div>
    
@endif


<ul>

    @foreach($allatok as $allat)
    <li>
        {{$allat->a_id}} --- {{$allat->nev}}
    </li>
        
    @endforeach
</ul>
</div>
@endsection