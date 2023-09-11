@extends('layouts.app')

@section('content')

<h1>Ez a menhelyregisztráció!</h1>

<div class="container bg-primry">
    <div class="row">
        <div class="col-6 border border-primary m-3 p-4">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">A menhely neve</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="A menhely neve">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Postai irányítószám</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Postai irányítószám">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Település neve</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Település">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Utca, házszám</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Utca, házszám">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Bankszámlaszám</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Bankszámla szám">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nyilvántartási szám</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nyilvántartási szám">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Adószám</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Adószám">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nev@nev.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Telefon</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="+36.......">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Weboldal címe</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nev.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">A menhely leírása</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"
                    placeholder="A leírás szövege"></textarea>
            </div>

            <div class="d-grid gap-2 col-6 mx-auto mb-3">

                <button type="button" class="btn btn-success">Beküld</button>
            </div>

        </div>

    </div>

</div>

@endsection