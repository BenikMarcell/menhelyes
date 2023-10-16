@extends('layouts.master')
@section('title','Főoldal')


@section('content')


<h1 class="text-center">Főoldal</h1>
    


<div class="container">
    <div class="row">
        <div class="col-6">
            <img id="fooldalkep" src="./images/macska2.jpg" alt="fooldalkep">
        </div>
    <div>
</div>

<div class="container">

    @foreach ($allatok as $key => $allat) 
    @if ($key % 3 === 0)
        <div class="row">
    @endif
    <div class="col-md-3 m-4">
        <div class="card">
            <img class="card-img-top" src="./images/kutya1.jpg" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">{{$allat->nev}}</h4>
                <p> Az adatbázisból<br> 
                    
                </p>
                <a href="./egyAllat" class="btn rounded">Bővebben</a>
            </div>
        </div>
    </div>
    @if (($key + 1) % 3 === 0 || $loop->last)
        </div>
    @endif
@endforeach   



    

        

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


</div>
@endsection
