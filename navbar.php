<?php
  ?>

<h1 class="button-menu-pos px-4 py-5 my-5 text-center display-5 fw-bold" data-bs-toggle="offcanvas" role="button" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop"> BD Collectibles</h1>

<div class="flex-shrink-0 p-3 bg-white offcanvas offcanvas-start" style="width: 280px;" tabindex="-1" id="offcanvasWithBackdrop"
    aria-labelledby="offcanvasWithBackdropLabel">
    <div class="offcanvas-header d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
      <button type="button" class="btn-close btn-light text-reset" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
    </div>
    <ul class="list-unstyled ps-0">
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
          Início
        </button>
        <div class="collapse" id="home-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="index.php#eventos" class="link-dark rounded">Eventos</a></li>
            <li><a href="index.php#galeria" class="link-dark rounded">Galeria de collectibles</a></li>
            <li><a href="index.php#feedbacks" class="link-dark rounded">Feedbacks</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
          Contactos
        </button>
        <div class="collapse" id="dashboard-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="contactos.php" class="link-dark rounded">Contacta-nos</a></li>
            <li><a href="contactos.php" class="link-dark rounded">Onde estamos?</a></li>
            <li><a href="registo.php" class="link-dark rounded">Registo</a></li>
            <li><a href="login.php" class="link-dark rounded">Login</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
