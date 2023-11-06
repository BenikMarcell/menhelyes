@extends('layouts.master')
@section('title',"Menhelyek")
@section('content')
@include('menhelyProfilNav')

<h1>Szerkesztés </h1>
<br>

<form method="POST" action="{{ route('menhelykepek.update', $kep->mk_id) }}" enctype="multipart/form-data">

    @csrf
    @method('PUT')
 
    <p>  Menhely id: {{ $m_id }}</p>
     
    <!-- Itt van a hozzáadott sor a "m_id" érték elküldéséhez -->
    <input type="hidden" name="m_id" value="{{ $m_id }}">
    
    <div class="container bg-primry">
        <div class="row">
            <div class="col-6 border border-primary m-3 p-4">
                
                <div class="mb-3">
                    <label for="kepCim" class="form-label">A kép címe</label>
                    <input type="text" class="form-control" id="kepCim" name="kepCim" value="{{ old('kepCim', $kep->kepCim)}}">
                </div>
                 @error('kepCim')
                 <div class="alert alert-warning">{{$message}} </div>
                 @enderror

                <div class="mb-3">
                    
                    
                    <h6>{{ $kep->src }}</h6>
                    
                    <img src="{{ asset('storage/images/' . $kep->src) }}" alt="{{ $kep->alt }}">

                </div>
                
                    
                <div class="mb-3">
                    <label for="alt" class="form-label">Alt</label>
                    <input type="text" class="form-control" id="alt" name="alt" value="{{ old('alt', $kep->alt)}}">
                </div>
                @error('alt')
                <div class="alert alert-warning">{{$message}} </div>
                @enderror

                <div class="mb-3">
                    <label for="leiras" class="form-label">A kép leírása</label>
                    <input type="text" class="form-control" id="leiras" name="leiras" value="{{ old('leiras', $kep->leiras)}}">
                </div>
                @error('leiras')
                <div class="alert alert-warning">{{$message}} </div>
                @enderror
                
    

            <div class="d-grid gap-2 col-6 mx-auto mb-3">

                <button type="submit" class="btn btn-success">Létrehoz</button>
            </div>

        </div>

    </div>
    <a class=" btn d-grid gap-2 col-2 mx-auto mb-3" href="{{ route('menhelykepek.index') }}">Képek listája</a>
</div>
</form>
@endsection

