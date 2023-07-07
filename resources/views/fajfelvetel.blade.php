@extends('layouts.master') // majd elkészül - Marci
@section('title','A faj meghatározása') // meglátjuk


@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">A faj meghatározása</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif
            <form method="POST">
                @csrf
                <label for="fajmeghatarozas" class="form-label">A faj meghatározása</label>
                <input type="text" class="form-control" id="fajok" name="faj" placeholder="Példa: Macska" value="{{old('fajok')}}">
                @error('fajok')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                        @enderror
                <button type="submit" class="btn btn-success mt-2 w-100">A faj mentése az adatbázisba</button>
            </form>
        </div>
        <div class="col-4"></div>
    <div class="row">
        <div class="col-12">
            <table class="table table-warning mt-2">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Faj</th>
                        <th class="text-end">Műveletek</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($fajok as $faj)
                        <tr id="faj_{{$faj->af_id}}">
                        <td>#{{$faj->af_id}}</td>
                        <td>{{$faj->faj}}</td>
                        <td class="text-end"><button class="btn btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                          </svg>Módosítás</button>
                        <button class="btn btn-danger" onclick="fajTorlesMegerosites({{ $faj->af_id }});"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                          </svg>Törlés</button></td>
                        </tr>
                    @endforeach
                </tbody>
                
            </table>
            {{ $fajok->links() }}
        </div>
    </div>
        </div>
    </div>
</div>

<script>

    function fajTorlesMegerosites(af_id){
            $.ajax({
                url: 'faj-torles-megerositese',
                method: 'POST',
                data:{"af_id":af_id},
                beforeSend:function(){
                    //Amíg nem kapok választ
                    $(".gombok").attr("disabled",true);
                },
                success:function(data){
                    //Ha megvan a válasz
                    $(".gombok").attr("disabled",false);
                    $("#modal-title").html(data['modal-title']);
                    $("#modal-body").html(data['modal-body']);
                    $("#modal-footer").html(data['modal-footer']);
                    $('#myModal').modal('show');
                },
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        }
        
    
        function fajTorles(af_id){
            $.ajax({
                url: 'faj-torles',
                method: 'POST',
                data:{"af_id":af_id},
                beforeSend:function(){
                    //Amíg nem kapok választ
                    $(".gombok").attr("disabled",true);
                
                },success:function(data){
                    //Ha megvan a válasz
                    $(".gombok").attr("disabled",false);
                    if(data['error'] == false){
                        $('#myModal').modal('hide');
                        $("#tipus_"+t_id).remove();
                    }else{
                        for(i=0;i<data['errorMsg'].length;i++){
                            $("#modal-body").html(data['errorMsg'][i]); 
                        }
                        
                    }
                },
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        }
    
        </script>
@endsection
