@extends('layouts.master')
@section('title',"Állatok")
@section('content')

<h1>Szerkesztés </h1>
<br>


                    @error('nev')
                    <div class="alert alert-warning">{{$message}} </div>
                    @enderror
                    @error('irsz')
                   <div class="alert alert-warning">{{$message}} </div>
                    @enderror
                    @error('telepules')
                    <div class="alert alert-warning">{{$message}} </div>
                    @enderror
                    @error('utca_hsz')
                    <div class="alert alert-warning">{{$message}} </div>
                    @enderror
                    @error('bankszamla_sz')
                    <div class="alert alert-warning">{{$message}} </div>
                    @enderror
                    @error('adoszam')
                    <div class="alert alert-warning">{{$message}} </div>
                    @enderror
                    @error('nyilv_szam')
                    <div class="alert alert-warning">{{$message}} </div>
                    @enderror
                    @error('email')
                    <div class="alert alert-warning">{{$message}} </div>
                    @enderror
                    @error('telefon')
                    <div class="alert alert-warning">{{$message}} </div>
                    @enderror
                    @error('weblink')
                    <div class="alert alert-warning">{{$message}} </div>
                    @enderror
                    @error('menhely_leiras')
                    <div class="alert alert-warning">{{$message}} </div>
                    @enderror

<form action="{{route('bevmen.update', $menhely->m_id)}}" method="POST">

    
    @csrf

    @method('PUT')

    <div class="container bg-primry">
        <div class="row">
            <div class="col-6 border border-primary m-3 p-4">
                <div class="mb-3">
                    <label for="nev" class="form-label">A menhely neve</label>
                    <input type="text" class="form-control" name="nev" id="nev" value="{{ old('nev', $menhely->nev)}}">
                   
                </div>
                <div class="mb-3">
                    <label for="irsz" class="form-label">Postai irányítószám</label>
                    <input type="text" class="form-control" id="irsz" name="irsz" value="{{ old('irsz', $menhely->irsz)}}">
                    
                </div>
                <div class="mb-3">
                    <label for="telepules" class="form-label">Település neve</label>
                    <input type="text" class="form-control" id="telepules" name="telepules" value="{{ old('telepules', $menhely->telepules)}}">
                    
                </div>
                <div class="mb-3">
                    <label for="utca_hsz" class="form-label">Utca, házszám</label>
                    <input type="text" class="form-control" id="utca_hsz" name="utca_hsz" value="{{ old('utca_hsz', $menhely->utca_hsz)}}">
                    
                </div>
                <div class="mb-3">
                    <label for="bankszamla_sz" class="form-label">Bankszámlaszám</label>
                    <input type="text" class="form-control" id="bankszamla_sz" name="bankszamla_sz" value="{{ old('bankszamla_sz', $menhely->bankszamla_sz)}}">
                    
                </div>
                <div class="mb-3">
                    <label for="nyilv_szam" class="form-label">Nyilvántartási szám</label>
                    <input type="text" class="form-control" id="nyilv_szam" name="nyilv_szam" value="{{ old('nyilv_szam', $menhely->nyilv_szam)}}">
                    
                </div>
                <div class="mb-3">
                    <label for="adoszam" class="form-label">Adószám</label>
                    <input type="text" class="form-control" id="adoszam" name="adoszam" value="{{ old('adoszam', $menhely->adoszam)}}">
                    
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $menhely->email)}}">
                    
                </div>
                <div class="mb-3">
                    <label for="telefon" class="form-label">Telefon</label>
                    <input type="text" class="form-control" id="telefon" name="telefon" value="{{ old('telefon', $menhely->telefon)}}">
                    
                </div>
                <div class="mb-3">
                    <label for="weblink" class="form-label">Weboldal címe</label>
                    <input type="text" class="form-control" id="weblink" name="weblink" value="{{ old('weblink', $menhely->weblink)}}">
                    
                </div>
                <div class="mb-3">
                    <label for="menhely_leiras" class="form-label">A menhely leírása</label>
                    <textarea class="form-control" id="menhely_leiras"  name="menhely_leiras" rows="10">{{ old('menhely_leiras', $menhely->menhely_leiras)}}</textarea>
                       
                </div>
    
                <div class="d-grid gap-2 col-6 mx-auto mb-3">
    
                    <button type="submit" class="btn btn-success">Ment</button>
                </div>
    
            </div>
    
        </div>
    
    </div>



</form>
@endsection