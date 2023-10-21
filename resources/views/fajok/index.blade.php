@extends('layouts.master')
@section('title',"Állatok")
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

        
        <a href="{{route('fajok.edit', $faj->af_id)}}" class="button">Módosítás</a>
   
        <form action="{{route('fajok.destroy', $faj->af_id)}}" method="POST">
         @csrf
         @method('DELETE')
         <button type="submit" onclick="return confirm ('Biztosan törlöd?')">Törlés</button>
        </form>


    </li>
        
    @endforeach
</ul>

@endsection