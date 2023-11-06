@extends('layouts.master')
@section('title',"Menhelyek")
@section('content')
@include('menhelyProfilNav')


<h1>Képek listája</h1>
<br>


@if (session('success'))
<div class="alert alert-success">
    {{session('success')}}

</div>
    
@endif


<ul>

    @foreach($kepek as $kep)
    <li>
        <h5> Kép id: {{$kep->mk_id}}   // Kép {{$kep->kepCim}} </h5>
   
         <a class=" btn mb-3" href="{{route('menhelykepek.show', $kep->mk_id)}}">Megjelenítés</a> 
    
        <a class=" btn mb-3" href="{{route('menhelykepek.edit', $kep->mk_id)}}" class="button">Módosítás  </a> 
      
        <form method="POST" action="{{ route('menhelykepek.destroy', $kep->mk_id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn mb-3" onclick="return confirm('Biztosan törlöd?')">Törlés</button>
        </form>
        
    </li>
    @endforeach
</ul>
<a class=" btn d-grid gap-2 col-6 mx-auto mb-3" href="{{route('menhelykepek.create', $kep->mk_id)}}">Új kép hozzáadása</a>   

@endsection