@extends('layouts.master')
@section('title',"Főoldal")
  



@section('content')
<h1>Ez a kapcsolat!</h1>

<div class="container">
    <div class="row">
        <div class="col-6 border border-primary m-3 p-4">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Név</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Név">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email cím</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nev@nev.hu">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Szöveg</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="valamilyen szöveg"></textarea>
              </div>
              <div class="d-grid gap-2 col-6 mx-auto mb-3">

                <button type="button" class="btn btn-success">Beküld</button>
              </div>

        </div>


    </div>


</div>
<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <div class="container-fluid">
    <ul class="navbar-nav">
      
      <li class="nav-item">
          <a class="nav-link" href="./kapcsolat/kapcsolat2">Tovább a Kapcsolat2</a>
        </li>
        
     
      
      
    </ul>
  </div>
</nav>
@endsection


