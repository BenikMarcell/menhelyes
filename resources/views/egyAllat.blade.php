@extends('layouts.master')
@section('title', 'Állatok')
@section('content')
    @php
        $showLogo = true;
        $showMenhely = true;
        $showAllat = true;
        $showKapcsolat = true;
    @endphp

    <!-- Adott állat képe -->
    <div class="container">
        <div class="row">
            <h1 class="text-center mb-5">{{ $allat->nev }}</h1>
            <div class="col-md-6 mb-4">
                @if ($allat->kep)
                    <img class="card-img-top" src="{{ asset('storage/images/' . $allat->kep->src) }}"
                        alt="Próba {{ $allat->kep->src }}">
                @endif
            </div>
            <!-- Adott állat leírása DB-ből -->

            <div class="col-md-6">
                <div class="row">
                    <p>{{ $allat->leiras }}</p>
                </div>
                <!-- Adott állat adatai -->
                <div class="row">
                    <div class="col-12 mb-4">
                        <h6>Kor: {{ $allat->kor }} hónap</h6>
                        <h6>Neme: {{ $allat->nem }}</h6>
                        <h6>Ivarállapota: {{ $allat->ivar_allapot }}</h6>
                        <h6>Chip: {{ $allat->chip }}</h6>
                        <h6>Színe: {{ $allat->allat_szin->szin }}</h6>
                        <h6>Faj: {{ $allat->allat_faj->faj }}</h6>
                    </div>
                </div>

            </div>



        </div>
        <!-- !!! Az állathoz tartozó menhely megtekintése nem működik -->
        <a id="visszaBtn" href="{{ route('egyMenhely', ['m_id' => $allat->m_id]) }}" class="btn rounded mb-3">Menhely
            megtekintése!</a>
        <!-- Betettem egy plusz gombot ami visszavisz a keresésre, az állatok -->
        <a id="visszaBtn" href="{{ url('/allatok') }}" class="btn rounded mt-2">Tovább keresek!</a>

    </div>

@endsection
