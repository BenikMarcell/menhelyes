@extends('layouts.app4')

@section('content')

<h1>Fajok regisztrációja!</h1>

<div class="container bg-primry">
    <div class="row">
        <div class="col-6 border border-primary m-3 p-4">
            <div class="mb-3">
                <label for="faj" class="form-label">Az állat faja</label>
                <input type="text" class="form-control" name="faj" id="faj" placeholder="pl. Puli">
            </div>
            

            <div class="d-grid gap-2 col-6 mx-auto mb-3">

                <button type="submit" class="btn btn-success">Beküld</button>
            </div>

        </div>

    </div>

</div>

@endsection