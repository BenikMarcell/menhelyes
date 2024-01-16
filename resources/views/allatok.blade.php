@extends('layouts.master')
@section('title', 'Állatok')
@section('content')
    @php
        $showLogo = true;
        $showMenhely = true;
        $showAllat = true;
        $showKapcsolat = true;
    @endphp

    <div class="container">
        <div class="row text-center">
            <div class="col-12-md-4"></div>
            <div class="col-12-md-4">


                <div class="ps-5">
                    <h1>Állat Kereső</h1>
                </div>
                <form class="form form-control p-3 m-3 text-center" action="#" method="get">

                    <div class="p-3 m-3 ">
                        <div class="col">
                            <label for="allatFajta">Állat fajta:</label>
                            <select class="form-select" name="allatFajta" id="allatFajtaValaszto">
                                <option selected value="none">Válassz fajt</option>
                                <option value="kutya">Kutya</option>
                                <option value="macska">Macska</option>
                                <option value="nyul">Nyúl</option>
                                <option value="tengerimalac">Tengerimalac</option>
                                <option value="mosomedve">Mosómedve</option>
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
                        <div class="col">
                            <label for="allatNeme">Állat neme:</label>
                            <select class="form-select" name="allatNeme" id="allatNemeValaszto">
                                <option selected value="none">Válassz nemet</option>
                                <option value="him">Hím</option>
                                <option value="nosteny">Nőstény</option>
                            </select>
                        </div>
                        <!-- Az állat korát kivettem a kereséséből
                                    <div class="inputMezo">
                                        <label for="allatKora">Állat kora:</label>
                                        <input class="form-control" type="number" placeholder="Kor">
                                    </div>
                            -->
                        <div class="col">
                            <label for="allatIvara">Állat ivarállapota:</label>
                            <select class="form-select" name="allatIvara" id="allatIvaraValaszto">
                                <option selected value="none">Válassz ivarállapotot</option>
                                <option value="ivaros">Ivaros</option>
                                <option value="ivartalanitott">Ivartalanított</option>
                            </select>
                        </div>

                    </div>
                    <button type="submit" class="btn rounded w-50">Keress!</button>

                    <!-- Az állat keresés funkció nem működik. Ez van a menhely kereső gombon
                                <a href="" class="btn rounded">Bővebben</a>
                                -->
                </form>

            </div>
        </div>
        <div class="col-12-md-4"></div>
    </div>

    <div class="container">

        <div class="row">
            <h3>Állataink</h3>

            <div class="container">
                <div class="row">
                    @foreach ($allatok as $key => $allat)
                        <div class="col-md-3">
                            <div class="card mb-5">
                                @if ($allat->kep)
                                    <img class="card-img-top" src="{{ asset('storage/images/' . $allat->kep->src) }}"
                                        alt="Próba {{ $allat->kep->src }}">
                                @endif
                                <div class="card-body">
                                    <h4 class="card-title">{{ $allat->nev }}</h4>
                                    <h6>{{ $allat->kor }} hónapos</h6>
                                    <h6>{{ $allat->nem }}</h6>
                                    <a href="{{ route('egyAllat', ['a_id' => $allat->a_id]) }}"
                                        class="btn rounded">Bővebben</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


            </div>
        @endsection
