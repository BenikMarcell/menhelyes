@extends('layouts.master')
@section('title',"Állatok")
@section('content')

<h1>Szerkesztés </h1>
<br>
<h3>views/fajok/edit</h3>

@error('faj')
<div class="alert alert-warning">{{$message}} </div>
@enderror                  

<form action="{{route('fajok.update', $faj->af_id)}}" method="POST">

    
    @csrf

    @method('PUT')

    <div class="container bg-primry">
        <div class="row">
            <div class="col-6 border border-primary m-3 p-4">
                <div class="mb-3">
                    <label for="faj" class="form-label">Az állat faja</label>
                    <input type="text" class="form-control" name="faj" id="faj" value="{{ old('faj', $faj->faj)}}">
                    
                </div>
                
                <div class="d-grid gap-2 col-6 mx-auto mb-3">
    
                    <button type="submit" class="btn btn-success">Ment</button>
                </div>
    
            </div>
    
        </div>
    
    </div>



</form>
@endsection