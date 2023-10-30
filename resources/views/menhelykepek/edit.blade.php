@extends('layouts.master')
@section('title',"Menhelyek")
@section('content')


<h1>Szerkesztés </h1>
<br>
<h3>views/menhelykepek/edit</h3>

@error('m_id')
<div class="alert alert-warning">{{$message}} </div>
@enderror
@error('kepCim')
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

                    


<form action="{{route('menhelykepek.update', $kep->mk_id)}}" method="POST">

    
    @csrf

    @method('PUT')
    
    
    <div class="container bg-primry">
        <div class="row">
            <div class="col-6 border border-primary m-3 p-4">
                <div class="mb-3">
                    <label for="m_id" class="form-label">menhely id - ez csak egy múló rosszullét</label>
                    <input type="text" class="form-control" name="m_id" id="m_id" value="{{ old('m_id', $kep->m_id)}}">
                    
                </div>
                <div class="mb-3">
                    <label for="kepCim" class="form-label">A kép címe</label>
                    <input type="text" class="form-control" id="kepCim" name="kepCim" value="{{ old('kepCim', $kep->kepCim)}}">
                    
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

