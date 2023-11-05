@extends('layouts.master')
@section('title',"Állatok")
@section('content')
@include('menhelyProfilNav')

<h1>Állatok regisztrációja!</h1>
<form action="{{route('bevall.store')}}" method="POST">

    @csrf

<div class="container bg-primry">
    <div class="row">

        
        
        <div class="col-6 border border-primary m-3 p-4">
            <div class="mb-3">
                <label for="nev" class="form-label"><h5>Az állat neve</h5></label>
                <input type="text" class="form-control" name="nev" id="nev" placeholder="pl. Buksi">
                 @error('nev')
                <div class="alert alert-warning">{{$message}} </div>
                @enderror
            </div>

            <div class="mb-3">
                <h5>Válassz állatfajtát!</h5> 
                <label for="faj"></label>  
                <select name="faj" id="faj">
                 @foreach ($fajok as $faj)
                <option value="{{$faj->af_id}}">{{$faj->faj}}</option>
                @endforeach
                </select>
                @error('faj')
                <div class="alert alert-warning">{{$message}} </div>
                @enderror
            </div>

            <div class="mb-3">
                <h5>Válassz színt!</h5> 
                <label for="szin"></label>  
                <select name="szin" id="szin">
                 @foreach ($szinek as $szin)
                <option value="{{$szin->szin_id}}">{{$szin->szin}}</option>
                @endforeach
                </select>
                @error('szin')
                <div class="alert alert-warning">{{$message}} </div>
                @enderror
            </div>

             <div class="mb-3">
                <h5>Nem</h5>
                <select class="form-select" id="nem" name="nem" size="2" aria-label="size 2 select example">
                <option value="Lány">Lány</option>
                <option value="Fiú">Fiú</option>
                </select>
                @error('nem')
                <div class="alert alert-warning">{{$message}} </div>
                @enderror
            </div>

            <div class="mb-3">
                <h5>Válassz a nemzőképesség szerint!</h5>
                <select class="form-select" id="ivar_allapot" name="ivar_allapot" size="2" aria-label="size 2 select example">
                <option value="Ivartalanított">Ivartalanított</option>
                <option value="Nem ivartalanított">Nem ivartalanított</option>
                </select>
                 @error('ivar_allapot')
                <div class="alert alert-warning">{{$message}} </div>
                @enderror
            </div>

            <div class="mb-3">
                <h5>Rendelkezik chippel?</h5>
                <select class="form-select" id="chip" name="chip" size="2" aria-label="size 2 select example">
                <option value="Igen">Igen</option>
                <option value="Nem">Nem</option>
                </select>
                 @error('chip')
                <div class="alert alert-warning">{{$message}} </div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="kor" class="form-label"><h5>Az állat kora (hónapokban megadva)</h5></label>
                <input type="text" class="form-control" name="kor" id="kor" placeholder="pl. 12 ">
                @error('kor')
                <div class="alert alert-warning">{{$message}} </div>
                @enderror
            </div>

            <div class="mb-3">
                    
                <label for="leiras" class="form-label"><h5>Az állat leírása</h5></label>
                <textarea class="form-control" name="leiras" id="leiras" rows="10"
                placeholder="A leírás szövege"></textarea>
                @error('leiras')
                <div class="alert alert-warning">{{$message}} </div>
                @enderror
            </div>

            <div class="d-grid gap-2 col-6 mx-auto mb-3">
                <button type="submit" class="btn btn-success">Beküld</button>
                <a href="{{ route('menhelyAllatai') }}" class="btn rounded">Mégsem</a>
            </div>
                
        </div>

    </div>

</div>
</form>
@endsection


 