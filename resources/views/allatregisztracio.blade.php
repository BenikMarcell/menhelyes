@extends('layouts.app2')

@section('content')

<h1>Állatok regisztrációja!</h1>

<div class="container bg-primry">
    <div class="row">
        <div class="col-6 border border-primary m-3 p-4">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Az állat neve</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="pl. Buksi">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Állatfaj</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="pl. kutya">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Az állat kora (hónapokban megadva)</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="pl. 12">
            </div>
            <div class="mb-3">
                <p>Az állat neme</p>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Válassz...</option>
                    <option value="1">Fiú</option>
                    <option value="2">Lány</option>
                </select>
            </div>
            <div class="mb-3">
                <p>Ivar-állapot</p>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Válassz...</option>
                    <option value="1">ivartalanított</option>
                    <option value="2">Nem ivartalanított</option>
                </select>
            </div>
            <div class="mb-3">
                <p>Chip</p>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Válassz...</option>
                    <option value="1">Van</option>
                    <option value="2">Nincs</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Az állat színe</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="pl. barna">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Az állat leírása</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"
                    placeholder="A leírás szövege"></textarea>
            </div>

            <div class="d-grid gap-2 col-6 mx-auto mb-3">

                <button type="button" class="btn btn-success">Beküld</button>
            </div>

        </div>

    </div>

</div>

@endsection
