@extends('layouts.master')
@section('title',"Állatok")
@section('content')

<h1>Állatok regisztrációja!</h1>
<form action="{{route('bevitel_allatok.store')}}" method="POST">

    @csrf

<div class="container bg-primry">
    <div class="row">
        <div class="col-6 border border-primary m-3 p-4">

            <div class="mb-3">
                <label for="m_id" class="form-label">m_id</label>
                <input type="text" class="form-control" name="m_id" id="m_id" placeholder="m_id 1-4">
                @error('m_id')
                <div class="alert alert-warning">{{$message}} </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nev" class="form-label">Az állat neve</label>
                <input type="text" class="form-control" name="nev" id="nev" placeholder="pl. Buksi">
                @error('nev')
                <div class="alert alert-warning">{{$message}} </div>
                @enderror
            </div>

            <div class="mb-3">
                <h5>Válassz állatfajtát!</h5> 
                <label for="faj">Állatfaj</label>  
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
                <label for="szin">Az állat színe</label>  
                <select name="szin" id="szin">
                <option value="0">Válassz színt!</option>
                 @foreach ($szinek as $szin)
                <option value="{{$szin->szin_id}}">{{$szin->szin}}</option>
                @endforeach
                </select>
            </div>
 
            <div class="mb-3">
                <label for="nem">Lány? Ha igen, bejelölni!</label>
                <input type="checkbox" name="nem" id="nem">
            </div>

            <div class="mb-3">
                <label for="ivar_allapot">Ivartalanított? Ha igen, bejelölni!</label>
                <input type="checkbox" name="ivar_allapot" id="ivar_allapot">
            </div>

            <div class="mb-3">
               <label for="chip">Rendelkezik chippel? Ha igen, bejelölni!</label>
               <input type="checkbox" name="chip" id="chip">
            </div>
            
            <div class="mb-3">
                <label for="kor" class="form-label">Az állat kora (hónapokban megadva)</label>
                <input type="text" class="form-control" name="kor" id="kor" placeholder="pl. 12 ">
                @error('kor')
                <div class="alert alert-warning">{{$message}} </div>
                @enderror
            </div>
            
            
            <div class="mb-3">
                <label for="leiras" class="form-label">Az állat leírása</label>
                <textarea class="form-control" id="leiras" rows="10"
                    placeholder="A leírás szövege"></textarea>
                    @error('leiras')
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

