@extends('layouts.master') 
@section('title','Szín lista')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-6 border border-primary m-3 p-4">
            <div class="mb-3">

                
                @if (Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
        <form method="POST">
            @csrf
            <label for="szin" class="form-label"><h4>Színkezelés</h4></label> // id="szin"
                <input type="text" class="form-control" id="szin"  name="szin" placeholder="Kérjük, írja le az állat színtét!" value="{{old('szinek')}}">
            @error('szin')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                    @enderror

                
              
              
              <div class="d-grid gap-2 col-6 mx-auto m-3">

                <button type="submit" class="btn btn-success">A szín mentése az adatbázisba!</button>
              </div>

             </form>

        </div>
    
   
        <table class="table table-info">
        <thead>
            
            <tr>
                <th>id</th>
                <th>Szín</th>
                <th>Műveletek</th>
            </tr>
        </thead>
            <tbody>
                @foreach ($szinek as $egySzin)
                
            
                <tr id="szinSor_{{ $egySzin->szin_id }}">
                    <td>#{{ $egySzin->szin_id }}</td>
                    <td>{{ $egySzin->szin }}</td>
                    <td> 
                        <button class="btn btn-warning gombok"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                          </svg>Módosítás</button>
                        <button class="btn btn-danger gombok" onclick="torlesMegerositese({{ $egySzin->szin_id }});"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                          </svg>Törlés</button>    
                    
                    </td>
                </tr>
                @endforeach
            </tbody>

       

            
                
        </table>
        {{ $szinek->links() }}
    </div>
  </div>
</div>


<script>

function torlesMegerositese(szin_id){
        $.ajax({
            url: 'szin-torles-megerositese',
            method: 'POST',
            data:{"szin_id":szin_id},
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
    

    function szinTorles(szin_id){
        $.ajax({
            url: 'szin-torles',
            method: 'POST',
            data:{"szin_id":szin_id},
            beforeSend:function(){
                //Amíg nem kapok választ
                $(".gombok").attr("disabled",true);
            
            },success:function(data){
                //Ha megvan a válasz
                $(".gombok").attr("disabled",false);
                if(data['error'] == false){
                    $('#myModal').modal('hide');
                    $("#szinSor_"+szin_id).remove();
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