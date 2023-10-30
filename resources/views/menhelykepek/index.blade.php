@extends('layouts.master')
@section('title',"Menhelyek")
@section('content')


<h1>Képek listája</h1>
<br>
<h3>views/menhelykepek/index</h3>

@if (session('success'))
<div class="alert alert-success">
    {{session('success')}}

</div>
    
@endif


<ul>

    @foreach($kepek as $kep)
    <li>
         Kép id: {{$kep->mk_id}}   // Kép {{$kep->kepCim}}

         <a href="{{route('menhelykepek.show', $kep->mk_id)}}" class="button">Megjelenítés</a>
         <a href="{{route('menhelykepek.edit', $kep->mk_id)}}" class="button">Módosítás</a>
   
        <form action="{{route('menhelykepek.destroy', $kep->mk_id)}}" method="POST">
         @csrf
         @method('DELETE')
         <button type="submit" onclick="return confirm ('Biztosan törlöd?')">Törlés</button>
        </form>
    </li>
        
    @endforeach
</ul>
@endsection