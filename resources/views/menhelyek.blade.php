@extends('layouts.master')
@section('title',"Menhelyek")
@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <h1>Menhely Kereső</h1>
            <<form class="form form-control" form action="{{route('menhelyekKereses')}}" method="POST">
                @csrf
                <div>
                    <label for="nev">Szűkítés név alapján:</label>
                    <input class="form-control" id="nev" name="nev" type="text" placeholder="pl. Vagyunk">
                </div>
                <button class="btn rounded m-5">Keress!</button>
            </form>
            
        </div>


        <div class="col-6">
            <h5>Menhelyek száma települések szerint:</h5>
            <ul>
                @foreach ($telepulesek as $telepules)
                    <li>
                        <a href="{{ route('menhelyekByTelepules', $telepules->telepules) }}">
                            {{ $telepules->count }} {{ $telepules->telepules }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>






<div class="container">

    <div class="row">
        <h3>Menhelyeink</h3>
        
        <div class="container">

            @foreach ($menhelyek as $key => $menhely) 
            @if ($key % 3 === 0)
                <div class="row">
            @endif
            <div class="col-md-3 m-4">
                <div class="card">
                    <img class="card-img-top" src="./images/menhelykep.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">{{$menhely->nev}}</h4>
                        <h6>{{$menhely->telepules}}</h6>
                        <h6>{{$menhely->menhely_leiras}}</h6>  
                            
                    
                        <a href="{{ route('egyMenhely', ['m_id' => $menhely->m_id]) }}" class="btn rounded">Bővebben</a>
                    </div>
                </div>
            </div>
            @if (($key + 1) % 3 === 0 || $loop->last)
                </div>
            @endif
          @endforeach   

        </div>




@endsection