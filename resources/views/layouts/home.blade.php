@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>



                <div class="card-body">

                    Sikeresen bejelentkeztél!

                    Átirányítás a profilra...
                    <meta http-equiv="refresh" content="2; url={{route('menhelyAllatai')}}">

                </div>



            </div>
        </div>
    </div>
</div>
@endsection
