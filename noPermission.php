<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BD Collectibles</title>
    <?php
    require "bibliotecas_up.php";
    ?>
</head>
<body class="bg-dark">

<div class="text-white text-center fw-bold display-1 mt-4">
<i class="fas fa-ban text-white"></i>
</div>

<div class="text-center text-white fw-bold display-5 mt-4" id="counter">Registo ainda não aprovado!</div>
<p class="text-center text-white display-8 mt-2">Por favor aguarde a intervenção de um administrador.<br>Pode levar até 24 horas a ter acesso à area privada.<br>A redirecionar para a página principal em 10 segundos.</p>
    <script src="scripts/redirectPostLogin.js"></script>

    <?php
    require "bibliotecas_down.php";
    ?>
</body>
</html>
