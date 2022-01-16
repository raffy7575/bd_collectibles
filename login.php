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
  require "navbar.php"
?>
<div class="container">
    <form class="box needs-validation" name ="f1 "action="funcoes.php" method="get" novalidate>
    <h1 class="fw-bold text-center px-1 py-1 my-1">Login</h1>
    <input class="form-control" type="text" name="email" placeholder="E-mail" required>
    <div class="invalid-feedback">Insira um email válido!</div> 
    <input class="form-control" type="password" name="password" placeholder="Password" required>
    <div class="invalid-feedback">Password incorreta!</div> 
    <input type="submit" name="login" value="Login">
  </form>    
</div>
</body>
</html>