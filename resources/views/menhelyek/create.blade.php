@extends('layouts.app1')

@section('content')

<h1>Ez a menhelyregisztráció!</h1>
<form action="{{route('menhelyek.store')}}" method="POST">

    @csrf
<div class="container bg-primry">
    <div class="row">
        <div class="col-6 border border-primary m-3 p-4">
            <div class="mb-3">
                <label for="name" class="form-label">A menhely neve</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="A menhely neve">
            </div>
            <div class="mb-3">
                <label for="zip" class="form-label">Postai irányítószám</label>
                <input type="text" class="form-control" id="zip" name="zip" placeholder="Postai irányítószám">
            </div>
            <div class="mb-3">
                <label for="telepules" class="form-label">Település neve</label>
                <input type="text" class="form-control" id="telepules" name="telepules" placeholder="Település">
            </div>
            <div class="mb-3">
                <label for="cim" class="form-label">Utca, házszám</label>
                <input type="text" class="form-control" id="cim" name="cim" placeholder="Utca, házszám">
            </div>
            <div class="mb-3">
                <label for="bankSzamla" class="form-label">Bankszámlaszám</label>
                <input type="text" class="form-control" id="bankSzamla" name="bankSzamla" placeholder="Bankszámla szám">
            </div>
            <div class="mb-3">
                <label for="nyilvantartas" class="form-label">Nyilvántartási szám</label>
                <input type="text" class="form-control" id="nyilvantartas" name="nyilvantartas" placeholder="Nyilvántartási szám">
            </div>
            <div class="mb-3">
                <label for="adoSzam" class="form-label">Adószám</label>
                <input type="text" class="form-control" id="adoSzam" name="adoSzam" placeholder="Adószám">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="nev@nev.com">
            </div>
            <div class="mb-3">
                <label for="telefon" class="form-label">Telefon</label>
                <input type="text" class="form-control" id="telefon" name="telefon" placeholder="+36.......">
            </div>
            <div class="mb-3">
                <label for="web" class="form-label">Weboldal címe</label>
                <input type="text" class="form-control" id="web" name="web" placeholder="nev.com">
            </div>
            <div class="mb-3">
                <label for="menhelyLeiras" class="form-label">A menhely leírása</label>
                <textarea class="form-control" id="menhelyLeiras"  name="menhelyLeiras" rows="10"
                    placeholder="A leírás szövege"></textarea>
            </div>

            <div class="d-grid gap-2 col-6 mx-auto mb-3">

                <button type="button" class="btn btn-success">Beküld</button>
            </div>

        </div>

    </div>

</div>
</form>
@endsection