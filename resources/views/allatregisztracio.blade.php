@extends('layouts.master')
@section('title',"Állatok")
@section('content')
@include('menhelyProfilNav')

<h1>Állatok regisztrációja!</h1>
<form action="{{route('bevall.store')}}" method="POST">

    @csrf

<div class="container bg-primry">
    <div class="row">

        <div class="col-6 border border-primary m-3 p-4">
            <label for="m_id" class="form-label">m_id</label>
            <input type="text" class="form-control" name="m_id" id="m_id" placeholder="m_id 1-4">
             @error('m_id')
            <div class="alert alert-warning">{{$message}} </div>
            @enderror
        </div>
        
        <div class="col-6 border border-primary m-3 p-4">
            <div class="mb-3">
                <label for="nev" class="form-label"><h5>Az állat neve</h5></label>
                <input type="text" class="form-control" name="nev" id="nev" placeholder="pl. Buksi">
                 @error('nev')
                <div class="alert alert-warning">{{$message}} </div>
                @enderror
            </div>

            <div class="mb-3">
                <h5>Válassz állatfajtát!</h5> 
                <label for="faj"></label>  
                <select name="faj" id="faj">
                 @foreach ($fajok as $faj)
                <option value="{{$faj->af_id}}">{{$faj->faj}}</option>
                @endforeach
                </select>
                @error('faj')
                <div class="alert alert-warning">{{$message}} </div>
                @enderror
            </div>

            <div class="mb-3">
                <h5>Válassz színt!</h5> 
                <label for="szin"></label>  
                <select name="szin" id="szin">
                 @foreach ($szinek as $szin)
                <option value="{{$szin->szin_id}}">{{$szin->szin}}</option>
                @endforeach
                </select>
                @error('szin')
                <div class="alert alert-warning">{{$message}} </div>
                @enderror
            </div>

             <div class="mb-3">
                <h5>Nem</h5>
                <select class="form-select" id="nem" name="nem" size="2" aria-label="size 2 select example">
                <option value="Lány">Lány</option>
                <option value="Fiú">Fiú</option>
                </select>
                @error('nem')
                <div class="alert alert-warning">{{$message}} </div>
                @enderror
            </div>

            <div class="mb-3">
                <h5>Válassz a nemzőképesség szerint!</h5>
                <select class="form-select" id="ivar_allapot" name="ivar_allapot" size="2" aria-label="size 2 select example">
                <option value="Ivartalanított">Ivartalanított</option>
                <option value="Nem ivartalanított">Nem ivartalanított</option>
                </select>
                 @error('ivar_allapot')
                <div class="alert alert-warning">{{$message}} </div>
                @enderror
            </div>

            <div class="mb-3">
                <h5>Rendelkezik chippel?</h5>
                <select class="form-select" id="chip" name="chip" size="2" aria-label="size 2 select example">
                <option value="Igen">Igen</option>
                <option value="Nem">Nem</option>
                </select>
                 @error('chip')
                <div class="alert alert-warning">{{$message}} </div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="kor" class="form-label"><h5>Az állat kora (hónapokban megadva)</h5></label>
                <input type="text" class="form-control" name="kor" id="kor" placeholder="pl. 12 ">
                @error('kor')
                <div class="alert alert-warning">{{$message}} </div>
                @enderror
            </div>


        <!-- Kép modal kezdete -->

        <!-- A modal ablak megjelenítésének kezdete -->
        <h5>Képek hozzáadása a profilhoz</h5>
        <button type="button" class="btn btn-primary d-grid gap-2 col-6 mx-auto m-3" data-toggle="modal" data-target="#uploadImageModal">
            Kép feltöltése
        </button>
        <!-- A modal ablak megjelenítésének vége -->

            <div class="modal fade" id="uploadImageModal" tabindex="-1" role="dialog" aria-labelledby="uploadImageModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="uploadImageModalLabel">Kép feltöltése</h5>
                     
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">

                    <!-- Kép feltöltési űrlap kezdete -->
                    
                    
                        <form method="post" action="{{ route('kepek.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                            <label for="kep_cim" class="form-label">A kép címe</label>
                            <input type="text" class="form-control" id="kep_cim" name="kep_cim" placeholder="Pl. Játszó kutya">
                            @error('kep_cim')
                            <div class="alert alert-warning">{{$message}} </div>
                            @enderror

                            <label for="src" class="form-label">Src</label>
                            <input type="file" class="form-control" id="src" name="src" placeholder="A kép kiválasztása">
                            @error('src')
                            <div class="alert alert-warning">{{$message}} </div>
                            @enderror

                            <label for="alt" class="form-label">Alt</label>
                            <input type="text" class="form-control" id="alt" name="alt" placeholder="Alt">
                            @error('alt')
                            <div class="alert alert-warning">{{$message}} </div>
                            @enderror
                              
                            <label for="leiras" class="form-label">A kép leírása</label>
                            <input type="text" class="form-control" id="leiras" name="leiras" placeholder="Szöveg -- 250 karakter">
                            @error('leiras')
                            <div class="alert alert-warning">{{$message}} </div>
                            @enderror


                            </div>
                            <input type="hidden" name="a_id" value="1"> <!-- value= $allat->a_id}}" -->   
                            <button type="submit" class="btn btn-primary m-3">Feltölt</button>
                          </form>

         <!-- Kép feltöltési űrlap vége -->    
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Bezárás</button>
                    </div>
                  </div>
                </div>
              </div>
              
<!-- Kép modal vége -->
            
            
                <div class="mb-3">
                    
                    <label for="leiras" class="form-label"><h5>Az állat leírása</h5></label>
                    <textarea class="form-control" name="leiras" id="leiras" rows="10"
                    placeholder="A leírás szövege"></textarea>
                    @error('leiras')
                    <div class="alert alert-warning">{{$message}} </div>
                    @enderror
                </div>

                <div class="d-grid gap-2 col-6 mx-auto mb-3">
                    <button type="submit" class="btn btn-success">Beküld</button>
                </div>

        </div>

    </div>

</div>
</form>
@endsection
