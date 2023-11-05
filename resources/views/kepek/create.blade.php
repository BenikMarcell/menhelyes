@extends('layouts.master')
@section('title',"Állatok")
@section('content')

<h1>Állatok képeinek regisztrációja!</h1>


<form action="{{route('kepek.store')}}" method="POST" enctype="multipart/form-data">
  

<div class="d-grid gap-2 col-6 mx-auto mb-3">
    <a href="{{ route('menhelyAllatai') }}" class="btn rounded">Nem töltök fel képet!</a>
</div>    
    @csrf
    
<div class="container bg-primry">
        <div class="row">
            <div class="col-6 border border-primary m-3 p-4">
                <div class="mb-3">
                    <label for="a_id" class="form-label">Állat ID</label>
                    @if(isset($pendingAnimalId))
                        <input type="text" name="a_id" id="a_id" value="{{ $pendingAnimalId }}">
                     @endif
                </div>
                
                    

                <div class="mb-3">
                    <label for="kep_cim" class="form-label">A kép címe</label>
                    <input type="text" class="form-control" id="kep_cim" name="kep_cim" placeholder="A kép címe">
                    @error('kep_cim')
                    <div class="alert alert-warning">{{$message}} </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="src" class="form-label">src</label>
                    <input type="file" class="form-control" id="src" name="src" placeholder="src">
                    @error('src')
                    <div class="alert alert-warning">{{$message}} </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="alt" class="form-label">Alt</label>
                    <input type="text" class="form-control" id="alt" name="alt" placeholder="Alt">
                    @error('alt')
                    <div class="alert alert-warning">{{$message}} </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="leiras" class="form-label">A kép leírása</label>
                    <input type="text" class="form-control" id="leiras" name="leiras" placeholder="Kép leírása">
                    @error('leiras')
                    <div class="alert alert-warning">{{$message}} </div>
                    @enderror
                </div>
                
    

                <div class="d-grid gap-2 col-6 mx-auto mb-3">
                <button type="submit" class="btn btn-success">Létrehoz</button>
                </div>

            </div>

        </div>

</div>
</form>
@endsection