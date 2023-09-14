@extends('layouts.master')
@section('title',"Állatok")
@section('content')

<h1>Szerkesztés </h1>
<br>
<h3>views/bevitel_allatok/edit</h3>

             

@error('m_id')
<div class="alert alert-warning">{{$message}} </div>
@enderror
@error('nev')
<div class="alert alert-warning">{{$message}} </div>
@enderror
@error('faj')
<div class="alert alert-warning">{{$message}} </div>
@enderror
@error('szin')
<div class="alert alert-warning">{{$message}} </div>
@enderror
@error('nem')
</select>
@error('ivar_allapot')
<div class="alert alert-warning">{{$message}} </div>
@enderror
<div class="alert alert-warning">{{$message}} </div>
@enderror
@error('chip')
<div class="alert alert-warning">{{$message}} </div>
@enderror
@error('kor')
<div class="alert alert-warning">{{$message}} </div>
@enderror
@error('leiras')
<div class="alert alert-warning">{{$message}} </div>
@enderror




<form action="{{route('bevitel_allatok.update', $allat->a_id)}}" method="POST">

    
    @csrf

    @method('PUT')

    <div class="container bg-primry">
        <div class="row">
            <div class="col-6 border border-primary m-3 p-4">
    
                <div class="mb-3">
                    <label for="m_id" class="form-label">m_id</label>
                    <input type="text" class="form-control" name="m_id" id="m_id" value="{{ old('m_id', $allat->m_id)}}">
                   
                </div>
                <div class="mb-3">
                    <label for="nev" class="form-label">Az állat neve</label>
                    <input type="text" class="form-control" name="nev" id="nev" value="{{ old('nev', $allat->nev)}}">
                </div>
    
                <div class="mb-3">
                    <h5>Válassz állatfajtát!</h5> 
                    <label for="faj"></label>  
                    <select name="faj" id="faj">
                     @foreach ($fajok as $faj)
                    <option value="{{$faj->af_id}}">{{$faj->faj}}</option>
                    @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <h5>Válassz színt!</h5>
                    <label for="szin"></label>  
                    <select name="szin" id="szin">
                     @foreach ($szinek as $szin)
                    <option value="{{$szin->szin_id}}">{{$szin->szin}}</option>
                    @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <h5>Válassz a nemek közül!</h5>
                    <select class="form-select" value="{{ old('nem', $allat->nem)}}" id="nem" name="nem" size="2" aria-label="size 2 select example" >
                    <option value="1">Lány</option>
                    <option value="2">Fiú</option>
                    </select>
                </div>

                <div class="mb-3">
                    <h5>Válassz a nemzőképesség szerint!</h5>
                    <select class="form-select" id="ivar_allapot" name="ivar_allapot" size="2" aria-label="size 2 select example">
                    <option value="1">Ivartalanított</option>
                    <option value="2">Nem ivartalanított</option>
                    </select>
                </div>

                <div class="mb-3">
                    <h5>Rendelkezik chippel?</h5>
                    <select class="form-select" id="chip" name="chip" size="2" aria-label="size 2 select example">
                    <option value="1">Igen</option>
                    <option value="2">Nem</option>
                    </select>
                </div>
            
                <div class="mb-3">
                    <label for="kor" class="form-label">Az állat kora (hónapokban megadva)</label>
                    <input type="text" class="form-control" name="kor" id="kor" value="{{ old('kor', $allat->kor)}}">
                </div>
                
                
                <div class="mb-3">
                    <label for="leiras" class="form-label">Az állat leírása</label>
                    <textarea class="form-control" name="leiras" id="leiras" rows="10"
                    >{{ old('leiras', $allat->leiras)}}</textarea>
             </div>
    
                <div class="d-grid gap-2 col-6 mx-auto mb-3">
    
                    <button type="submit" class="btn btn-success">Beküld</button>
                </div>
    
            </div>
    
        </div>
    
    </div>


</form>
@endsection