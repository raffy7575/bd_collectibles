<?php
session_start();
if(isset($_SESSION['tipo_utilizador'])){
    if($_SESSION['tipo_utilizador'] == 'membro'){

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php
    require "bibliotecas_up.php";
?>
</head>

<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 text-center">
                <span>
                    <h3>Escolha a sua opção <?php $_SESSION['nome'];?></h3>
                </span>

                <div class="d-grid gap-4">

                    <a href="listagem.php" target="_blank" class="btn btn-success">Listar</a>

                    <a href="" class="btn btn-primary">Inserir</a>

                    <a href="" class="btn btn-warning">Apagar</a>

                    <a href="" class="btn btn-danger">Eliminar</a>

                    <a href="index.php" class="btn btn-light">Logout</a>
                </div>

            </div>
        </div>



    </div>

    <?php
    require "bibliotecas_down.php";
    ?>
</body>

</html>

<?php

}else{
    header('location:noPermission.php');
}
}

?>