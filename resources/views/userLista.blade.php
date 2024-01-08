@extends('layouts.master')

@section('title', 'Felhasznaló kezelés')
@section('content')
@include('menhelyProfilNav')
    <h2 class="text-center">Felhasználó kezelés</h2>

    <div class="container">
        <div class="rowy col-12">
            <div class="table-responsive">
                <table class="table table-light table-striped table-hoover">
                    <tr>
                        <th>user ID</th>
                        <th>Name</th>
                        <th>User type</th>
                        <th>Műveletek</th>
                    </tr>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->type }}</td>
                        <td >
                            <a href="{{ route('menhely.editAdmin', ['m_id' => $user->id]) }}">
                                
                                <!--ez itt nem adja át az m_id t csak beleteszi a url be? -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M7.127 22.562l-7.127 1.438 1.438-7.128 5.689 5.69zm1.414-1.414l11.228-11.225-5.69-5.692-11.227 11.227 5.689 5.69zm9.768-21.148l-2.816 2.817 5.691 5.691 2.816-2.819-5.691-5.689z"/>
                                </svg>
                            </a>
                            <a href="{{ route('egyMenhely', ['m_id' => $user->id]) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M15 12c0 1.654-1.346 3-3 3s-3-1.346-3-3 1.346-3 3-3 3 1.346 3 3zm9-.449s-4.252 8.449-11.985 8.449c-7.18 0-12.015-8.449-12.015-8.449s4.446-7.551 12.015-7.551c7.694 0 11.985 7.551 11.985 7.551zm-7 .449c0-2.757-2.243-5-5-5s-5 2.243-5 5 2.243 5 5 5 5-2.243 5-5z"/>
                                </svg>
                            </a>
                            <a href="", onclick="alertTemp({{ $user->id }});">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M3 6v18h18v-18h-18zm5 14c0 .552-.448 1-1 1s-1-.448-1-1v-10c0-.552.448-1 1-1s1 .448 1 1v10zm5 0c0 .552-.448 1-1 1s-1-.448-1-1v-10c0-.552.448-1 1-1s1 .448 1 1v10zm5 0c0 .552-.448 1-1 1s-1-.448-1-1v-10c0-.552.448-1 1-1s1 .448 1 1v10zm4-18v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.315c0 .901.73 2 1.631 2h5.712z"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    
                </table>
                {{$users -> links()}}
            </div>
        </div>
    </div>

    <script>
        function alertTemp(m_id){
            
            //alert(m_id);
        }
    </script>
@endsection