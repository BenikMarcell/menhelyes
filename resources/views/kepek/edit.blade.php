@extends('layouts.master')
@section('title',"Állatok")
@section('content')


<h1>Szerkesztés </h1>
<br>
<h3>views/kepek/edit</h3>

@error('a_id')
<div class="alert alert-warning">{{$message}} </div>
@enderror
@error('kep_cim')
<div class="alert alert-warning">{{$message}} </div>
@enderror
@error('src')
<div class="alert alert-warning">{{$message}} </div>
@enderror
@error('alt')
<div class="alert alert-warning">{{$message}} </div>
@enderror
@error('leiras')
<div class="alert alert-warning">{{$message}} </div>
@enderror

                    


<form action="{{route('kepek.update', $kep->ak_id)}}" method="POST">

    
    @csrf

    @method('PUT')
    
    
    <div class="container bg-primry">
        <div class="row">
            <div class="col-6 border border-primary m-3 p-4">
                <div class="mb-3">
                    <label for="a_id" class="form-label">állat id - ez csak egy múló rosszullét</label>
                    <input type="text" class="form-control" name="a_id" id="a_id" value="{{ old('a_id', $kep->a_id)}}">
                    
                </div>
                <div class="mb-3">
                    <label for="kep_cim" class="form-label">A kép címe</label>
                    <input type="text" class="form-control" id="kep_cim" name="kep_cim" value="{{ old('kep_cim', $kep->kep_cim)}}">
                    
                </div>
                <div class="mb-3">
                    <label for="src" class="form-label">src</label>
                    <input type="src" class="form-control" id="src" name="src" value="{{ old('src', $kep->src)}}">
                </div>

                <div class="mb-3">
                    <label for="alt" class="form-label">Alt</label>
                    <input type="text" class="form-control" id="alt" name="alt" value="{{ old('alt', $kep->alt)}}">
                    
                </div>
                <div class="mb-3">
                    <label for="leiras" class="form-label">A kép leírása</label>
                    <input type="text" class="form-control" id="leiras" name="leiras" value="{{ old('leiras', $kep->leiras)}}">
                    
                </div>
                
    

            <div class="d-grid gap-2 col-6 mx-auto mb-3">

                <button type="submit" class="btn btn-success">Létrehoz</button>
            </div>

        </div>

    </div>

</div>
</form>
@endsection

@error('a_id')
<div class="alert alert-warning">{{$message}} </div>
@enderror
@error('kep_cim')
<div class="alert alert-warning">{{$message}} </div>
@enderror
@error('src')
<div class="alert alert-warning">{{$message}} </div>
@enderror
@error('alt')
<div class="alert alert-warning">{{$message}} </div>
@enderror
@error('leiras')
<div class="alert alert-warning">{{$message}} </div>
@enderror