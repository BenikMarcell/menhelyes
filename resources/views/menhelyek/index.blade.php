@extends('layouts.app1')

@section('content')


<h1>Menhely lista </h1>
<br>
<h3>views/menhelyek/index</h3>

@if (session('success'))
<div class="alert alert-success">
    {{session('success')}}

</div>
    
@endif


<ul>

    @foreach($menhelyek as $menhely)
    <li>
        {{$menhely->m_id}} --- {{$menhely->nev}}
    </li>
        
    @endforeach
</ul>