@extends('layouts.master')

@section('title', 'Felhasznaló kezelés')
@section('content')
    <h2 class="text-center">Felhasználó kezelés</h2>

    <div class="container">
        <div class="rowy col-12">
            <div class="table-responsive">
                <table class="table table-light table-striped table-hoover">
                    <tr>
                        <th>user ID</th>
                        <th>Name</th>
                        <th>User type</th>
                    </tr>
                    <tr>
                        <td>#1</td>
                        <td>A neve</td>
                        <td>a típusa</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

@endsection