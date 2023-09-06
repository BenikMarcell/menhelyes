@extends('layouts.app2')

@section('content')


<h1>Állat lista </h1>
<br>
<h3>views/allatok/index</h3>

@if (session('success'))
<div class="alert alert-success">
    {{session('success')}}

</div>
    
@endif


<ul>

    @foreach($allatok as $allat)
    <li>
        {{$allat->m_id}} --- {{$allat->nev}}
    </li>
        
    @endforeach
</ul>