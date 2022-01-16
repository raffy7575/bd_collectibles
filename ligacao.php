<?php  //ligacao.php

$servidor = "localhost";
$utilizador = "root";
$palavra_chave = "";
$basedados = "bd_collectibles";


$ligacao = mysqli_connect(
    $servidor,
    $utilizador,
    $palavra_chave,
    $basedados) or die ("<br> Erro1");

/* if($ligacao = true){
    //echo "<br> Ligação Sucedida";
} */

?>