@extends('layouts.master')
@section('title',"Állatok")
@section('content')

<h1>Menhely lista </h1>
<br>
<h3>views/bevitel_menhelyek/index</h3>

@if (session('success'))
<div class="alert alert-success">
    {{session('success')}}

</div>
    
@endif


<ul>

    @foreach($menhelyek as $menhely)
    <li>
      m_id:  {{$menhely->m_id}}  // Név: {{$menhely->nev}} // Telephely: {{$menhely->telepules}} // Cím: {{$menhely->utca_hsz}}

      <a href="{{route('bevitel_menhelyek.show', $menhely->m_id)}}" class="button">Megjelenítés</a>
      <a href="{{route('bevitel_menhelyek.edit', $menhely->m_id)}}" class="button">Módosítás</a>
   
      <form action="{{route('bevitel_menhelyek.destroy', $menhely->m_id)}}" method="POST">
       @csrf
       @method('DELETE')
       <button type="submit" onclick="return confirm ('Biztosan törlöd?')">Törlés</button>
       </form>

    </li>
        
    @endforeach
</ul>

@endsection