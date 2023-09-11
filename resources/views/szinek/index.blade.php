@extends('layouts.master')
@section('title',"Állatok")
@section('content')
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
@endsection