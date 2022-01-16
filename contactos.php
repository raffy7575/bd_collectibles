<?php 
 include "funcoes.php";
?>

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

  <div class="registration-form">
        <form class="needs-validation" action="funcoesContactos.php" method="post" name="contactos" novalidate>
        <h1 id ="feedbacks" class="display-5 fw-bold text-center px-4 py-4 my-4"> Contacto </h1>

        <!--nome de contacto -->
            <div class="form-group">
            <input type="text" name="nomeDeContacto" placeholder="Nome" class="form-control item" value="" required>  
            </div>

            <!--email de contacto -->
            <div class="form-group">
            <input type="text" name="emailDeContacto" placeholder="Email" class="form-control item" value="" required>
            <div class="invalid-feedback">
                  Insere um e-mail válido!
                </div> 
            </div>

          <!--contacto de contacto -->
            <div class="form-group">
                <input type="text" name="contactoDeContacto" placeholder="Contacto" class="form-control item" value="" required>
            </div>

          <!--horario de contacto -->
            <div class="form-group">
                <select class="form-select item " name="HorarioDeContacto" aria-label="Floating label select example">
                  <option selected>Horário de contacto</option>
                  <option value="1">indeferente</option>
                  <option value="1">Manhã</option>
                  <option value="2">Tarde</option>
                  <option value="2">Noite</option>
                </select>
            </div>

          <!--assunto de contacto -->
            <div class="form-group">
            <input type="text" name="assuntoDeContacto" placeholder="Assunto" class="form-control item" value="" required> 
            </div>

            <!--mensagem de contacto -->
            <div class="form-group">
              <textarea class="form-control" placeholder="Mensagem" name="mensagemDeContacto"></textarea>
            </div>
                <br>


                  <!--HUMANIZAÇÃO -->
            <div class="form-group">
              <textarea class="form-control" placeholder="Quanto é 2+2 " ></textarea>
            </div>
                <br>



            <div class="form-group">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
            <?php

            header: "contactos.php";

            ?>
        </form>
    </div>
</div>

<?php
    require "bibliotecas_down.php";
    ?>
<!-- redes sociais - ao clicar por cima abre a aba da rede social que clicou -->
<h1 id ="feedbacks" class="display-5 fw-bold text-center px-4 py-5 my-5"> Redes Socais </h1>

<div class="container">
  <div class="row">
    <div class="col-4 col-md-4">
    <a href="https://twitter.com/" ><img class="rounded-circle" src="media/twitter.png" id="img02" width="100"></a>
    </div>
    <div class="col-4 col-md-4">
    <a href="https://www.facebook.com/" ><img class="rounded-circle" src="media/facebook.png" id="img02" width="100"></a>
    </div>
    <div class="col-4 col-md-4">
    <a href="https://www.instagram.com/" ><img class="rounded-circle" src="media/instagram.png" id="img02" width="100"></a>
    </div>
  </div>
</div>

<!-- mapa da google -->
<h1 id ="feedbacks" class="display-5 fw-bold text-center px-4 py-5 my-5"> Localização </h1>
<div class="ratio ratio-21x9">
          <iframe width="425" 
          height="350" 
          frameborder="0" 
          scrolling="no" 
          marginheight="0" 
          marginwidth="0" 
          src="https://www.openstreetmap.org/export/embed.html?bbox=-7.925541400909425%2C40.65184584722716%2C-7.905457019805909%2C40.663614925385595&amp;layer=mapnik&amp;marker=40.65773064583849%2C-7.915499210357666" 
          style="border: 0px solid"></iframe><br/><small>
          <a href="https://www.openstreetmap.org/?mlat=40.6577&amp;mlon=-7.9155#map=16/40.6577/-7.9155"></a></small>
</div>
     
          
        </form>
    </div>
</div>


    
<?php
  //include "navbar.php"
?>