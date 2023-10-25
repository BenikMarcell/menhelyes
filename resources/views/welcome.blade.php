@extends('layouts.master')
@section('title','Főoldal')


@section('content')


<h1 class="text-center">Főoldal</h1>
    



<div class="container">
    <div class="row">
        <div class="col-6">
            <img id="fooldalkep" src="./images/macska2.jpg" alt="fooldalkep">
        </div>
    </div> <!-- </div> hozzáadva itt -->
</div>


<


<div class="container">
    @php
    $elemekSzamaSoronkent = 3; // elemekSzamaSoronkent; // Soronkénti elemek száma
    $sorokSzama = 1; // sorokSzama; // A megjelenítendő sorok számát itt állíthatod be
    $sorSzam =  0;  //sorSzam;
    @endphp
    
    <div class="row">
        @foreach ($allatok as $key => $allat)
            <div class="col-md-4  allat-card">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('storage/images/' . $allat->kep->src) }}" alt="Próba {{ $allat->kep->src }}">
                        <div class="card-body">
                        <h4 class="card-title">{{$allat->nev}}</h4>
                        <h6>{{$allat->kor}} hónapos</h6>
                        <h6>{{$allat->nem}}</h6>
                        <a href="{{ route('egyAllat', ['a_id' => $allat->a_id]) }}" class="btn rounded">Bővebben</a>
                    </div>
                </div>
            </div>
            @php
            $sorSzam++;
            @endphp
            @if ($sorSzam % ($elemekSzamaSoronkent * $sorokSzama) === 0)
    </div>
    <div class="row">
    @endif
    @endforeach
    </div>
</div>


<div class="container">
    @php
    $elemekSzamaSoronkent = 3; // elemekSzamaSoronkent; // Soronkénti elemek száma
    $sorokSzama = 1; // sorokSzama; // A megjelenítendő sorok számát itt állíthatod be
    $sorSzam =  0;  //sorSzam;
    @endphp
    
    <div class="row">
        @foreach ($menhelyek as $key => $menhely)
        <div class="col-md-4  menhely-card">
            <div class="card">
                    <img class="card-img-top" src="./images/menhely.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">{{$menhely->nev}}</h4>
                        <h6>{{$menhely->telepules}}</h6>
                        <h6>{{$menhely->telefon }}</h6>
                        <a href="" class="btn rounded">Bővebben</a>
                    </div>
                </div>
            </div>
            @php
            $sorSzam++;
            @endphp
            @if ($sorSzam % ($elemekSzamaSoronkent * $sorokSzama) === 0)
    </div>
    <div class="row">
    @endif
    @endforeach
    </div>
</div>

    






<script src="{{ asset('js/pagination.js') }}"></script> 
<script src="{{ asset('js/menhelyPagination.js') }}"></script>

  <!-- Modal -->
  <script
  src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
  crossorigin="anonymous"
></script>
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
  crossorigin="anonymous"
></script>

@endsection




