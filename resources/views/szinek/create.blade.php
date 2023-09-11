@extends('layouts.master')
@section('title',"Állatok")
@section('content')

<h1>Szín regisztrációja!</h1>
<form action="{{route('szinek.store')}}" method="POST">

    @csrf


<div class="container bg-primry">
    <div class="row">
        <div class="col-6 border border-primary m-3 p-4">
            <div class="mb-3">
                <label for="szin" class="form-label">Az állat színe</label>
                <input type="text" class="form-control" name="szin" id="szin" placeholder="szín">
                @error('szin')
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
