@extends('layouts.master')
@section('title',"Menhelyek")
@section('content')

<h1>Menhely képek regisztrációja!</h1>


<form action="{{route('menhelykepek.store')}}" method="POST" enctype="multipart/form-data">
  
    @csrf
    
<div class="container bg-primry">
        <div class="row">
            <div class="col-6 border border-primary m-3 p-4">
                <div class="mb-3">
                    <label for="m_id" class="form-label">menhely id - ez csak egy múló rosszullét</label>
                    <input type="text" class="form-control" name="m_id" id="m_id" placeholder="1---4">
                    @error('m_id')
                    <div class="alert alert-warning">{{$message}} </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="kepCim" class="form-label">A kép címe</label>
                    <input type="text" class="form-control" id="kepCim" name="kepCim" placeholder="A kép címe">
                    @error('kepCim')
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