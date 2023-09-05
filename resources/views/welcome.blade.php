@extends('layouts.master')
@section('title','Főoldal')
@section('content')

<div class="container p-3 m-3 text-center">
    <form class="form form-control border border-primary p-3 m-3 text-center" action="#" method="post">
        <h2>Állat Kereső</h2>
        <div class="col-6 border border-success p-3 m-3 text-center">
            <div class="m-2">
                <label for="allatfajta">Állat fajta:</label>
                <select name="allatfajta" id="allatfajtaValaszto" aria-placeholder="Válassz fajt">
                    <option value="kutya">Kutya</option>
                    <option value="macska">Macska</option>
                    <option value="kutya">Kutya</option>
                    <option value="medve">Medve</option>
                </select>
            </div>
            <div class="m-2">
                <label for="allatszine">Állat színe:</label>
                <select name="allatszine" id="allatszineValaszto" aria-placeholder="Válassz színt">
                    <option value="fekete">Fekete</option>
                    <option value="feher">Fehér</option>
                    <option value="szurke">Szürke</option>
                    <option value="barna">Barna</option>
                </select>
            </div>
        </div>
        <div class="col-6 border border-success p-3 m-3 text-center">
            <div class="m-2">
                <label for="allatneme">Állat neme:</label>
                <select name="allatneme" id="allatnemeValaszto" aria-placeholder="Válassz nemet">
                    <option value="him">Hím</option>
                    <option value="nosteny">Nőstény</option>
                </select>
            </div>
            <div class="m-2">
                <label for="allatkora">Állat kora:</label>
                <input type="number" placeholder="Kor">
            </div>
        </div>
        <button class="btn btn-primary rounded">Keress!</button>
    </form>
</div>
<div class="container">
    <div>
        <h1>Főoldal</h1>
        <h6>A belépés: vagyunk@gmail.com és  12345678</h6>
    </div>
    <div class="row">
        <div class="col-3">
            <div class="card">
                <img class="card-img-top" src="./images/kutya1.jpg" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">John Doe</h4>
                    <p> Az adatbázisból<br> 
                        Név:<br> 
                        Kor:<br> 
                        Leírás:<br>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                        dicta sunt explicabo.
                    </p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card">
                <img class="card-img-top" src="./images/kutya1.jpg" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">John Doe</h4>
                    <p> Az adatbázisból<br> 
                        Név:<br> 
                        Kor:<br> 
                        Leírás:<br>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                        dicta sunt explicabo.
                    </p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card">
                <img class="card-img-top" src="./images/kutya1.jpg" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">John Doe</h4>
                    <p> Az adatbázisból<br> 
                        Név:<br> 
                        Kor:<br> 
                        Leírás:<br>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                        dicta sunt explicabo.
                    </p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card">
                <img class="card-img-top" src="./images/kutya1.jpg" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">John Doe</h4>
                    <p> Az adatbázisból<br> 
                        Név:<br> 
                        Kor:<br> 
                        Leírás:<br>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                        dicta sunt explicabo.
                    </p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-3">
            <div class="card">
                <img class="card-img-top" src="./images/macska1.jpg" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">John Doe</h4>
                    <p> Az adatbázisból<br> 
                        Név:<br> 
                        Kor:<br> 
                        Leírás:<br>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                        dicta sunt explicabo.
                    </p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <img class="card-img-top" src="./images/macska1.jpg" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">John Doe</h4>
                    <p> Az adatbázisból<br> 
                        Név:<br> 
                        Kor:<br> 
                        Leírás:<br>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                        dicta sunt explicabo.
                    </p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <img class="card-img-top" src="./images/macska1.jpg" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">John Doe</h4>
                    <p> Az adatbázisból<br> 
                        Név:<br> 
                        Kor:<br> 
                        Leírás:<br>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                        dicta sunt explicabo.
                    </p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <img class="card-img-top" src="./images/macska1.jpg" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">John Doe</h4>
                    <p> Az adatbázisból<br> 
                        Név:<br> 
                        Kor:<br> 
                        Leírás:<br>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                        dicta sunt explicabo.
                    </p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
        </div>
    </div>
    <!---Modal-->

    <div
    class="modal fade"
    id="idKutya1"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-success" id="exampleModalLabel">
            Részletes leírás
          </h5>
          <button
            type="button"
            class="close"
            data-dismiss="modal"
            aria-label="Close"
          >
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-justify text-success">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-4">
                <img
                src="./images/kutya1.jpg"
                  class="img-fluid"
                  alt="kutya 1"
                />
              </div>
              <div class="col-sm-8">
                <h4>Kutya 1</h4>
                <p>Az adatbázisból<br> Név: <br> Kor: <br> És a többi adat:  <br> Leírás: <br> 
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                    dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                    sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
                    est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius
                    modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                </p>
                <a class="btn btn-info m-1" href="./kapcsolat" role="button">Támogatlak! 
                </a> <br>
                <a class="btn btn-success" href="./kapcsolat" role="button">Megtaláltalak! 
                 </a>
                  
                </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          

          <button
            type="button"
            class="btn btn-warning"
            data-dismiss="modal"
          >
             Tovább nézelődöm... 
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <script
  src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
  crossorigin="anonymous"
></script>
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
  crossorigin="anonymous"
></script>
</div>
@endsection