@extends('layouts.master')
@section('title',"Állatok")
@section('content')

<h1>Ez a menhelyregisztráció!</h1>
<form action="{{route('bevmen.create')}}" method="POST">
    

    @csrf
<div class="container bg-primry">
    <div class="row">
        <div class="col-6 border border-primary m-3 p-4">
            <div class="mb-3">
                <label for="nev" class="form-label">A menhely neve</label>
                <input type="text" class="form-control" name="nev" id="nev" placeholder="A menhely neve">
                @error('nev')
                <div class="alert alert-warning">{{$message}} </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="irsz" class="form-label">Postai irányítószám</label>
                <input type="text" class="form-control" id="irsz" name="irsz" placeholder="Postai irányítószám">
                @error('irsz')
                <div class="alert alert-warning">{{$message}} </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="telepules" class="form-label">Település neve</label>
                <input type="text" class="form-control" id="telepules" name="telepules" placeholder="Település">
                @error('telepules')
                <div class="alert alert-warning">{{$message}} </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="utca_hsz" class="form-label">Utca, házszám</label>
                <input type="text" class="form-control" id="utca_hsz" name="utca_hsz" placeholder="Utca, házszám">
                @error('utca_hsz')
                <div class="alert alert-warning">{{$message}} </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="bankszamla_sz" class="form-label">Bankszámlaszám</label>
                <input type="text" class="form-control" id="bankszamla_sz" name="bankszamla_sz" placeholder="Bankszámla szám">
                @error('bankszamla_sz')
                <div class="alert alert-warning">{{$message}} </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nyilv_szam" class="form-label">Nyilvántartási szám</label>
                <input type="text" class="form-control" id="nyilv_szam" name="nyilv_szam" placeholder="Nyilvántartási szám">
                @error('nyilv_szam')
                <div class="alert alert-warning">{{$message}} </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="adoszam" class="form-label">Adószám</label>
                <input type="text" class="form-control" id="adoszam" name="adoszam" placeholder="Adószám">
                @error('adoszam')
                <div class="alert alert-warning">{{$message}} </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="nev@nev.com">
                @error('email')
                <div class="alert alert-warning">{{$message}} </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="telefon" class="form-label">Telefon</label>
                <input type="text" class="form-control" id="telefon" name="telefon" placeholder="+36.......">
                @error('telefon')
                <div class="alert alert-warning">{{$message}} </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="weblink" class="form-label">Weboldal címe</label>
                <input type="text" class="form-control" id="weblink" name="weblink" placeholder="nev.com">
                @error('weblink')
                <div class="alert alert-warning">{{$message}} </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="menhely_leiras" class="form-label">A menhely leírása</label>
                <textarea class="form-control" id="menhely_leiras"  name="menhely_leiras" rows="10"
                placeholder="A leírás szövege"></textarea>
                @error('menhely_leiras')
                <div class="alert alert-warning">{{$message}} </div>
                @enderror
            </div>

            <div class="d-grid gap-2 col-6 mx-auto mb-3">

                <button type="submit" class="btn btn-success">Beküld</button>
            </div>

        </div>

    </div>

</div>
</form>
@endsection