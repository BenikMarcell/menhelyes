@extends('layouts.master')
@section('title',"Állatok")
@section('content')

<div class="container">

    <div class="row">

        <h1 class="text-center mb-5">Menhely Neve</h1>

        <div class="col-6">
            <img class="profilkep" src="./images/menhelykep.jpg" alt="profilkep">
        </div>

        <div class="col-6">
            <h3>Leírás:</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis reprehenderit excepturi facere incidunt recusandae quod tempore totam, temporibus autem sit, corrupti repellat reiciendis aspernatur. Commodi reiciendis sint quaerat? Harum, praesentium!</p>
        </div>
        
    </div>

    <div class="row">

        <div class="col-6">
            <h3>Adatok:</h3>
            <p>Menhely adatai...</p>
        </div>

        <div class="col-6 text-center">
            <form class="form form-control" action="#">
                <h3>Állat hozzáadás:</h3>
                <a href="./allatregisztracio" class="btn rounded mt-3">Hozzáadás!</a>
            </form>
        </div>

    </div>

    <div class="row">
        <h2>Állataim:</h2>
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
                    <div class="row">
                        <div class="col-6">
                            <a href="./egyAllat" class="btn rounded">Bővebben</a>
                        </div>
                        <div class="col-6">
                            <a href="./allatTorles" class="btn rounded">Törlés</a>
                        </div>
                    </div>


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
                    <div class="row">
                        <div class="col-6">
                            <a href="./egyAllat" class="btn rounded">Bővebben</a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="btn rounded">Törlés</a>
                        </div>
                    </div>
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
                    <div class="row">
                        <div class="col-6">
                            <a href="./egyAllat" class="btn rounded">Bővebben</a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="btn rounded">Törlés</a>
                        </div>
                    </div>
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
                    <div class="row">
                        <div class="col-6">
                            <a href="./egyAllat" class="btn rounded">Bővebben</a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="btn rounded">Törlés</a>
                        </div>
                    </div>
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
                    <div class="row">
                        <div class="col-6">
                            <a href="./egyAllat" class="btn rounded">Bővebben</a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="btn rounded">Törlés</a>
                        </div>
                    </div>
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
                    <div class="row">
                        <div class="col-6">
                            <a href="./egyAllat" class="btn rounded">Bővebben</a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="btn rounded">Törlés</a>
                        </div>
                    </div>
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
                    <div class="row">
                        <div class="col-6">
                            <a href="./egyAllat" class="btn rounded">Bővebben</a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="btn rounded">Törlés</a>
                        </div>
                    </div>
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
                    <div class="row">
                        <div class="col-6">
                            <a href="./egyAllat" class="btn rounded">Bővebben</a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="btn rounded">Törlés</a>
                        </div>
                    </div>
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
                    <div class="row">
                        <div class="col-6">
                            <a href="./egyAllat" class="btn rounded">Bővebben</a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="btn rounded">Törlés</a>
                        </div>
                    </div>
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
                    <div class="row">
                        <div class="col-6">
                            <a href="./egyAllat" class="btn rounded">Bővebben</a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="btn rounded">Törlés</a>
                        </div>
                    </div>
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
                    <div class="row">
                        <div class="col-6">
                            <a href="./egyAllat" class="btn rounded">Bővebben</a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="btn rounded">Törlés</a>
                        </div>
                    </div>
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
                    <div class="row">
                        <div class="col-6">
                            <a href="./egyAllat" class="btn rounded">Bővebben</a>
                        </div>
                        <div class="col-6">
                            <a id="" href="#" class="btn rounded">Törlés</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection