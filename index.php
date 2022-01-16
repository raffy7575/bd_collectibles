<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BD Collectibles</title>
    <?php
    require "bibliotecas_up.php";
    require "bibliotecas_down.php";
    ?>
</head>
<body class="animate__animated animate__zoomIn">

<?php
    include "navbar.php"
?>

<div class="container">

  <div class="px-4 py-5 my-5 text-center">
  <div class="logo text-center" id="conteudoDesenho1"></div>

   <script src="logo.js"></script> 
  

  <div class="col-lg-6 mx-auto">
    <p class="lead mb-4">Bem vindo ao maior site de banda desenhada do país! Aqui podes encontrar a maior coleção de BD, ver os nossos <i>collectibles</i>, saber quais as nossas próximas convenções e eventos e ainda contactar-nos.</p>
  </div>
  </div>

  <h1 id ="eventos" class="display-5 fw-bold text-center px-4 py-5 my-5"> Eventos </h1>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                     <h1 class="display-5 fw-bold text-center px-3 py-3 my-3"></h1>
                    <div class="hori-timeline" dir="ltr">
                    <ul class="list-inline events">
                        <li class="list-inline-item event-list">
                            <div class="px-4">
                                <div class="event-date bg-soft-primary text-primary">2 June</div>
                                <h5 class="font-size-16">Event One</h5>
                                <p class="text-muted">It will be as simple as occidental in fact it will be Occidental Cambridge friend</p>
                                
                            </div>
                        </li>
                        <li class="list-inline-item event-list">
                            <div class="px-4">
                                <div class="event-date bg-soft-success text-success">5 June</div>
                                <h5 class="font-size-16">Event Two</h5>
                                <p class="text-muted">Everyone realizes why a new common language one could refuse translators.</p>
                                
                            </div>
                        </li>
                        <li class="list-inline-item event-list">
                            <div class="px-4">
                                <div class="event-date bg-soft-danger text-danger">7 June</div>
                                <h5 class="font-size-16">Event Three</h5>
                                <p class="text-muted">If several languages coalesce the grammar of the resulting simple and regular</p>
                                
                            </div>
                        </li>
                        <li class="list-inline-item event-list">
                            <div class="px-4">
                                <div class="event-date bg-soft-warning text-warning">8 June</div>
                                <h5 class="font-size-16">Event Four</h5>
                                <p class="text-muted">Languages only differ in their pronunciation and their most common words.</p>
                                
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="hori-timeline" dir="ltr">
                    <ul class="list-inline events">
                        <li class="list-inline-item event-list">
                            <div class="px-4">
                                <div class="event-date bg-soft-primary text-primary">2 June</div>
                                <h5 class="font-size-16">Event One</h5>
                                <p class="text-muted">It will be as simple as occidental in fact it will be Occidental Cambridge friend</p>
                            
                            </div>
                        </li>
                        <li class="list-inline-item event-list">
                            <div class="px-4">
                                <div class="event-date bg-soft-success text-success">5 June</div>
                                <h5 class="font-size-16">Event Two</h5>
                                <p class="text-muted">Everyone realizes why a new common language one could refuse translators.</p>
                                
                            </div>
                        </li>
                        <li class="list-inline-item event-list">
                            <div class="px-4">
                                <div class="event-date bg-soft-danger text-danger">7 June</div>
                                <h5 class="font-size-16">Event Three</h5>
                                <p class="text-muted">If several languages coalesce the grammar of the resulting simple and regular</p>
                                
                            </div>
                        </li>
                        <li class="list-inline-item event-list">
                            <div class="px-4">
                                <div class="event-date bg-soft-warning text-warning">8 June</div>
                                <h5 class="font-size-16">Event Four</h5>
                                <p class="text-muted">Languages only differ in their pronunciation and their most common words.</p>
                                
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <!-- end card -->
        </div>
    </div>
</div>

<!-- Galeria-->

<h1 id ="galeria" class="display-5 fw-bold text-center px-4 py-5 my-5"> Galeria de collectibles</h1>

<div class="container mt-5 mb-5">
<div class="row mb-5">

<div class="col-md-4">
    <img  class="img-fluid img-thumbnail myImg" src="media/img01.jpg" id="img02">
</div>

<div class="col-md-4">
    <img  class="img-fluid img-thumbnail myImg" src="media/img01.jpg" id="img02">
</div>

<div class="col-md-4">
    <img  class="img-fluid img-thumbnail myImg" src="media/img01.jpg" id="img02">
</div>

</div>

<div class="row">

<div class="col-md-4">
    <img  class="img-fluid img-thumbnail myImg" src="media/img01.jpg" id="img02">
</div>

<div class="col-md-4">
    <img  class="img-fluid img-thumbnail myImg" src="media/img01.jpg" id="img02">
</div>

<div class="col-md-4">
    <img  class="img-fluid img-thumbnail myImg" src="media/img01.jpg" id="img02">
</div>

</div>


</div>

<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img02">
  <div id="caption"></div>
</div>

<!-- feedbacks amigos -->

<h1 id ="feedbacks" class="display-5 fw-bold text-center px-4 py-5 my-5"> Feedbacks</h1>

<div class="container mt-5 mb-5">
    <div class="row g-2">
        <div class="col-md-4">
            <div class="card p-3 text-center px-4">
                <div class="user-image"> <img src="https://i.imgur.com/PKHvlRS.jpg" class="rounded-circle" width="80"> </div>
                <div class="user-content">
                    <h5 class="mb-0">Bruce Hardy</h5> <span>Software Developer</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 text-center px-4">
                <div class="user-image"> <img src="https://i.imgur.com/w2CKRB9.jpg" class="rounded-circle" width="80"> </div>
                <div class="user-content">
                    <h5 class="mb-0">Mark Smith</h5> <span>Web Developer</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 text-center px-4">
                <div class="user-image"> <img src="https://i.imgur.com/ACeArwY.jpg" class="rounded-circle" width="80"> </div>
                <div class="user-content">
                    <h5 class="mb-0">Veera Duncan</h5> <span>Software Architect</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
            </div>
        </div>
    </div>
</div>


<footer>
    <p class="darkgray text-center">Created for Mozilla Firefox using HTML, CSS, JavaScript, PHP and SQL.</p>
</footer>
</body>


</html>