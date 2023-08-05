@extends('layouts.app2')

@section('content')
<h1>Ez a kapcsolat csak menhelyeknek!</h1>

<div class="container">
    <div class="row">
        <div class="col-6 border border-primary m-3 p-4">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">A menhely neve</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Név">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email cím</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nev@nev.hu">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Szöveg</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"
                    placeholder="szöveg"></textarea>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto mb-3">

                <button type="button" class="btn btn-success">Beküld</button>
            </div>
        </div>
    </div>
</div>

@endsection