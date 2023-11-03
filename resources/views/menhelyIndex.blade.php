@extends('layouts.master')
@section('title',"Állataim")
@section('content')

@include('menhelyProfilNav')
@php
   
    $showLogo = false;
    $showMenhely = false;
    $showAllat = false;
    $showKapcsolat = false;


@endphp

<div class="container">

    @if (session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    
    </div>
        
    @endif
   
    
    
    <ul>

        @foreach($menhelyek as $menhely)
        <li>
          m_id:  {{$menhely->m_id}}  // Név: {{$menhely->nev}} 
    
          <a href="{{route('bevmen.show', $menhely->m_id)}}" class="button">Megjelenítés</a>
          <a href="{{route('bevmen.edit', $menhely->m_id)}}" class="button">Módosítás</a>
       
          <form action="{{route('bevmen.destroy', $menhely->m_id)}}" method="POST">
           @csrf
           @method('DELETE')
           <button type="submit" onclick="return confirm ('Biztosan törlöd?')">Törlés</button>
           </form>
    
        </li>
            
        @endforeach
    </ul>



@endsection