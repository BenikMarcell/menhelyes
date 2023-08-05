@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!--<div class="card-header">{{ __('Dashboard') }}</div>-->
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('Belépett a kizárólag menhelyeknek fentartott oldalakra!') }}

                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-3 border border-primary m-2 p-4">
                <div>
                    <img src="./images/macska3.jpg" class="img-fluid img-thumbnail" alt="Ez egy kép lenne">
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                        dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                        fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque
                        porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia
                        non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                    </p>

                </div>
            </div>
        </div>
        @endsection