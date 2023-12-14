@extends('layouts.master')
@section('title',"Állatok")
@section('content')
@php
    $showLogo = true;
    $showMenhely = true;
    $showAllat = true;
    $showKapcsolat = true;
@endphp

<div class="container">
    <h1 class="text-center ps-5">Állat Kereső</h1>
    <form class="form form-control p-3 m-3 text-center" action="#" method="post">
        <div class="col-6 p-3 m-3 text-center">
            <div class="inputMezo">
                <label for="allatFajta">Állat fajta:</label>
                <select class="form-control" name="allatFajta" id="allatFajtaValaszto">
                    <option selected value="none">Válassz fajt</option>
                    <option value="kutya">Kutya</option>
                    <option value="macska">Macska</option>
                    <option value="horcsog">Hörcsög</option>
                    <option value="medve">Medve</option>
                </select>
            </div>

    <!-- Az állat színét kivettem a keresésből
            <div class="inputMezo">
                <label for="allatSzine">Állat színe:</label>
                <select class="form-control" name="allatSzine" id="allatSzineValaszto">
                    <option selected value="none">Válassz színt</option>
                    <option value="fekete">Fekete</option>
                    <option value="feher">Fehér</option>
                    <option value="szurke">Szürke</option>
                    <option value="barna">Barna</option>
                </select>
            </div>
    -->
            <div class="inputMezo">
                <label for="allatNeme">Állat neme:</label>
                <select class="form-control" name="allatNeme" id="allatNemeValaszto">
                    <option selected value="none">Válassz nemet</option>
                    <option value="him">Hím</option>
                    <option value="nosteny">Nőstény</option>
                </select>
            </div>
            <div class="inputMezo">
                <label for="allatKora">Állat kora:</label>
                <input class="form-control" type="number" placeholder="Kor">
            </div>
            <div class="inputMezo">
                <label for="allatIvara">Állat ivarállapota:</label>
                <select class="form-control" name="allatIvara" id="allatIvaraValaszto">
                    <option selected value="none">Válassz ivarállapotot</option>
                    <option value="ivaros">Ivaros</option>
                    <option value="ivartalanitott">Ivartalanított</option>
                </select>
            </div>
        </div>
        <button class="btn rounded">Keress!</button>
        
        <!-- Az állat keresés funkció nem működik. Ez van a menhely kereső gombon
        <a href="{{ route('egyMenhely', ['m_id' => $menhely->m_id]) }}" class="btn rounded">Bővebben</a>
        -->
    </form>
</div>

<div class="container">

    <div class="row">
        <h3>Állataink</h3>
        
        <div class="container">
            <div class="row">
                @foreach ($allatok as $key => $allat)
                <div class="col-md-3">
                    <div class="card mb-3">
                        @if($allat->kep)
                            <img class="card-img-top" src="{{ asset('storage/images/' . $allat->kep->src) }}" alt="Próba {{ $allat->kep->src }}">
                        @endif
                        <div class="card-body">
                            <h4 class="card-title">{{$allat->nev}}</h4>
                            <h6>{{$allat->kor}}</h6>
                            <h6>{{$allat->nem}}</h6>  
                            <a href="{{ route('egyAllat', ['a_id' => $allat->a_id]) }}" class="btn rounded">Bővebben</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
 

        </div>
@endsection