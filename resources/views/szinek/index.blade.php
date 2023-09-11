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

        <a href="{{route('szinek.edit', $szin->szin_id)}}" class="button">Módosítás</a>
        <form action="{{route('szinek.destroy', $szin->szin_id)}}" method="POST">
         @csrf
         @method('DELETE')
         <button type="submit" onclick="return confirm ('Biztosan törlöd?')">Törlés</button>
        </form>
    </li>
        
    @endforeach
</ul>
@endsection