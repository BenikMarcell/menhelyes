@extends('layouts.app5')

@section('content')

<h1>Képek regisztrációja!</h1>
<form action="{{route('kepek.store')}}" method="POST">

    @csrf
<div class="container bg-primry">
    <div class="row">
        <div class="col-6 border border-primary m-3 p-4">
            <div class="mb-3">
                <label for="kep_cim" class="form-label">A kép címe</label>
                <input type="text" class="form-control" name="kep_cim" id="kep_cim" placeholder="A kép címe">
                @error('kep_cim')
                <div class="alert alert-warning">{{$message}} </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="src" class="form-label">Kép linkje/vagy ilyesmi</label>
                <input type="text" class="form-control" id="src" name="src" placeholder="Link">
                @error('src')
<div class="alert alert-warning">{{$message}} </div>
@enderror
            </div>
            
            
            <div class="mb-3">
                <label for="alt" class="form-label">Ha nem jelenik meg, akkor a leírás</label>
                <input type="text" class="form-control" id="alt" name="alt" placeholder="Ha nem jelenik meg, akkor a leírás">
                @error('alt')
                <div class="alert alert-warning">{{$message}} </div>
                @enderror
            </div>
            
            
            <div class="mb-3">
                <label for="leiras" class="form-label">A kép leírása</label>
                <textarea class="form-control" id="leiras"  name="leiras" rows="5"
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