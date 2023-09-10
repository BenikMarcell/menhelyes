@extends('layouts.master')
@section('title',"Állatok")
@section('content')

<div class="container">
    <h1 class="text-center">Állat Kereső</h1>
    <form class="form form-control p-3 m-3 text-center" action="#" method="post">
        <div class="col-6 p-3 m-3 text-center">
            <div class="inputMezo">
                <label for="allatFajta">Állat fajta:</label>
                <select class="form-control" name="allatFajta" id="allatFajtaValaszto">
                    <option selected value="none">Válassz fajt</option>
                    <option value="kutya">Kutya</option>
                    <option value="macska">Macska</option>
                    <option value="horcsog">Hörcsög</option>
                    <option value="medve">Medve</option>
                </select>
            </div>
            <div class="inputMezo">
                <label for="allatSzine">Állat színe:</label>
                <select class="form-control" name="allatSzine" id="allatSzineValaszto">
                    <option selected value="none">Válassz színt</option>
                    <option value="fekete">Fekete</option>
                    <option value="feher">Fehér</option>
                    <option value="szurke">Szürke</option>
                    <option value="barna">Barna</option>
                </select>
            </div>
            <div class="inputMezo">
                <label for="allatNeme">Állat neme:</label>
                <select class="form-control" name="allatNeme" id="allatNemeValaszto">
                    <option selected value="none">Válassz nemet</option>
                    <option value="him">Hím</option>
                    <option value="nosteny">Nőstény</option>
                </select>
            </div>
            <div class="inputMezo">
                <label for="allatKora">Állat kora:</label>
                <input class="form-control" type="number" placeholder="Kor">
            </div>
            <div class="inputMezo">
                <label for="allatIvara">Állat ivarállapota:</label>
                <select class="form-control" name="allatIvara" id="allatIvaraValaszto">
                    <option selected value="none">Válassz ivarállapotot</option>
                    <option value="ivaros">Ivaros</option>
                    <option value="ivartalanitott">Ivartalanított</option>
                </select>
            </div>
        </div>
        <button class="btn btn-primary rounded">Keress!</button>
    </form>
</div>

<div class="container">

    <div class="row">
        <h2>Találatok:</h2>
        <div class="col-3 mt-5">
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
                    <a href="./egyAllat" class="btn rounded">Bővebben</a>
                </div>
            </div>
        </div>

        <div class="col-3 mt-5">
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
                    <a href="./egyAllat" class="btn rounded">Bővebben</a>
                </div>
            </div>
        </div>

        <div class="col-3 mt-5">
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
                    <a href="./egyAllat" class="btn rounded">Bővebben</a>
                </div>
            </div>
        </div>

        <div class="col-3 mt-5">
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
                    <a href="./egyAllat" class="btn rounded">Bővebben</a>
                </div>
            </div>
        </div>

        <div class="col-3 mt-5">
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
                    <a href="./egyAllat" class="btn rounded">Bővebben</a>
                </div>
            </div>
        </div>

        <div class="col-3 mt-5">
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
                    <a href="./egyAllat" class="btn rounded">Bővebben</a>
                </div>
            </div>
        </div>

        <div class="col-3 mt-5">
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
                    <a href="./egyAllat" class="btn rounded">Bővebben</a>
                </div>
            </div>
        </div>

        <div class="col-3 mt-5">
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
                    <a href="./egyAllat" class="btn rounded">Bővebben</a>
                </div>
            </div>
        </div>

        <div class="col-3 mt-5">
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
                    <a href="./egyAllat" class="btn rounded">Bővebben</a>
                </div>
            </div>
        </div>

        <div class="col-3 mt-5">
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
                    <a href="./egyAllat" class="btn rounded">Bővebben</a>
                </div>
            </div>
        </div>

        <div class="col-3 mt-5">
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
                    <a href="./egyAllat" class="btn rounded">Bővebben</a>
                </div>
            </div>
        </div>

        <div class="col-3 mt-5">
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
                    <a href="./egyAllat" class="btn rounded">Bővebben</a>
                </div>
            </div>
        </div>

    </div>
</div>


@endsection