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
        <form class="needs-validation" action="funcoes.php" method="post" name="f2" novalidate>
            <div class="form-group">
                <input type="text" name="nome" placeholder="Nome" class="form-control item" id="nome" value="" required> 
                <div class="invalid-feedback">
                  Insere um nome válido!
                </div>
            </div>
            <div class="form-group">
                <input type="text" name="sobrenome" placeholder="Sobrenome" class="form-control item" id="sobrenome" value="">
            </div>

            <div class="form-group">
                <input type="text" name="idade" placeholder="Idade" class="form-control item" id="idade" value="" required>
                <div class="invalid-feedback">
                    Insere uma idade válida!
                </div>
            </div>

            <div class="form-group">
                <input type="text" name="email" placeholder="E-mail" class="form-control item" id="email" value="" required>
                <div class="invalid-feedback">
                  Insere um e-mail válido!
                </div>
            </div>

            <div class="form-group">
                <input type="password" name="password" placeholder="Password" class="form-control item" id="password" value="" required>
                <div class="invalid-feedback">
                  Insere uma password!
                </div>
            </div>

            <div class="form-group">
                <input type="text" name="contacto" placeholder="Contacto" class="form-control item" id="contacto" value="" required>
                <div class="invalid-feedback">
                  Insere um numero de telefone válido!
                </div>
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-block create-account">Criar conta</button>
            </div>
        </form>
    </div>
</div>

<footer>
    <p class="darkgray text-center">Created for Mozilla Firefox using HTML, CSS, JavaScript, PHP and SQL.</p>
</footer>
</body>


</html>