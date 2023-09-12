@extends('layouts.master')
@section('title',"Állatok")
@section('content')


<h1>Képek listája</h1>
<br>
<h3>views/kepek/index</h3>

@if (session('success'))
<div class="alert alert-success">
    {{session('success')}}

</div>
    
@endif


<ul>

    @foreach($kepek as $kep)
    <li>
         Kép id: {{$kep->ak_id}}   // Kép {{$kep->kep_cim}}

         <a href="{{route('kepek.show', $kep->ak_id)}}" class="button">Megjelenítés</a>
         <a href="{{route('kepek.edit', $kep->ak_id)}}" class="button">Módosítás</a>
   
        <form action="{{route('kepek.destroy', $kep->ak_id)}}" method="POST">
         @csrf
         @method('DELETE')
         <button type="submit" onclick="return confirm ('Biztosan törlöd?')">Törlés</button>
        </form>
    </li>
        
    @endforeach
</ul>
@endsection