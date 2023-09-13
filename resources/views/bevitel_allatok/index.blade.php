@extends('layouts.master')
@section('title',"Állatok")
@section('content')

<h1>állat lista</h1>
<br>
<h3>views/bevitel_allatok/index</h3>

@if (session('success'))
<div class="alert alert-success">
    {{session('success')}}

</div>
    
@endif


<ul>

    @foreach($allatok as $allat)
    <li>
        {{$allat->a_id}} --- {{$allat->nev}}
        <a href="{{route('bevitel_allatok.show', $allat->a_id)}}" class="button">Megjelenítés</a>
        <a href="{{route('bevitel_allatok.edit', $allat->a_id)}}" class="button">Módosítás</a>
        <form action="{{route('bevitel_allatok.destroy', $allat->a_id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="danger" onclick="return confirm('Tutira töröljük?')">Törlés</button>
        </form>
    </li>
        
    @endforeach
</ul>

@endsection

