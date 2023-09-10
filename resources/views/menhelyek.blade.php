@extends('layouts.master')
@section('title',"Menhelyek")
@section('content')


<div class="container">
    <h1 class="text-center">Menhely Kereső</h1>
    <form class="form form-control p-3 m-3 text-center" action="#" method="post">
        <div class="col-6 p-3 m-3">
            <div class="inputMezo">
                <label for="allatfajta">Szűkítés név alapján:</label>
                <input class="form-control" type="text" placeholder="Írj be valamit">
            </div>
        </div>
        <div class="col-6 p-3 m-3 text-center">
            <div class="inputMezo">
                <label for="menhelyTelephelye">Menhely telephelye:</label>
                <select class="form-control" name="menhelyTelephelye" id="menhelyTelephelye" placeholder="Válassz telephelyet">
                    <option selected value="none">Válassz telephelyet</option>
                    <option value="Budapest">Budapest</option>
                    <option value="Debrecen">Debrecen</option>
                    <option value="Szeged">Szeged</option>
                    <option value="Sopron">Sopron</option>
                </select>
            </div>
        </div>
        <button class="btn rounded">Keress!</button>
    </form>
</div>

<div class="container">

    <div class="row">
        <h2>Találatok:</h2>
        <div class="col-3 mt-5">
            <div class="card">
                <img class="card-img-top" src="./images/menhelykep.jpg" alt="Card image">
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
                    <a href="./egyMenhely" class="btn rounded">Bővebben</a>
                </div>
            </div>
        </div>

        <div class="col-3 mt-5">
            <div class="card">
                <img class="card-img-top" src="./images/menhelykep.jpg" alt="Card image">
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
                    <a href="./egyMenhely" class="btn rounded">Bővebben</a>
                </div>
            </div>
        </div>

        <div class="col-3 mt-5">
            <div class="card">
                <img class="card-img-top" src="./images/menhelykep.jpg" alt="Card image">
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
                    <a href="./egyMenhely" class="btn rounded">Bővebben</a>
                </div>
            </div>
        </div>

        <div class="col-3 mt-5">
            <div class="card">
                <img class="card-img-top" src="./images/menhelykep.jpg" alt="Card image">
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
                    <a href="./egyMenhely" class="btn rounded">Bővebben</a>
                </div>
            </div>
        </div>

        <div class="col-3 mt-5">
            <div class="card">
                <img class="card-img-top" src="./images/menhelykep.jpg" alt="Card image">
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
                    <a href="./egyMenhely" class="btn rounded">Bővebben</a>
                </div>
            </div>
        </div>

        <div class="col-3 mt-5">
            <div class="card">
                <img class="card-img-top" src="./images/menhelykep.jpg" alt="Card image">
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
                    <a href="./egyMenhely" class="btn rounded">Bővebben</a>
                </div>
            </div>
        </div>

        <div class="col-3 mt-5">
            <div class="card">
                <img class="card-img-top" src="./images/menhelykep.jpg" alt="Card image">
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
                    <a href="./egyMenhely" class="btn rounded">Bővebben</a>
                </div>
            </div>
        </div>

        <div class="col-3 mt-5">
            <div class="card">
                <img class="card-img-top" src="./images/menhelykep.jpg" alt="Card image">
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
                    <a href="./egyMenhely" class="btn rounded">Bővebben</a>
                </div>
            </div>
        </div>

        <div class="col-3 mt-5">
            <div class="card">
                <img class="card-img-top" src="./images/menhelykep.jpg" alt="Card image">
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
                    <a href="./egyMenhely" class="btn rounded">Bővebben</a>
                </div>
            </div>
        </div>

        <div class="col-3 mt-5">
            <div class="card">
                <img class="card-img-top" src="./images/menhelykep.jpg" alt="Card image">
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
                    <a href="./egyMenhely" class="btn rounded">Bővebben</a>
                </div>
            </div>
        </div>

        <div class="col-3 mt-5">
            <div class="card">
                <img class="card-img-top" src="./images/menhelykep.jpg" alt="Card image">
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
                    <a href="./egyMenhely" class="btn rounded">Bővebben</a>
                </div>
            </div>
        </div>

        <div class="col-3 mt-5">
            <div class="card">
                <img class="card-img-top" src="./images/menhelykep.jpg" alt="Card image">
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
                    <a href="./egyMenhely" class="btn rounded">Bővebben</a>
                </div>
            </div>
        </div>

    </div>
</div>


@endsection