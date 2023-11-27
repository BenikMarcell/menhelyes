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
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->type }}</td>
                    </tr>
                    @endforeach
                    
                </table>
                {{$users -> links()}}
            </div>
        </div>
    </div>

@endsection