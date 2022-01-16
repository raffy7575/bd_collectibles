<?php

require "ligacao.php";

if(isset($_POST['nome'])){
    if($_POST['nome'] != ""){
        inserirRegisto();
    }else{
        echo"<br> Existe Campos...";
    }
}

function inserirRegisto(){

    global $ligacao;

    date_default_timezone_set("Europe/Lisbon");

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contacto = $_POST['contacto'];
    $tipo_utilizador = 'visitante';
    $data = '';
    $hora = '';

    $sql = "INSERT INTO bd_collectibles VALUE (

        '',
        '$nome', 
        '$sobrenome', 
        '$idade',
        '$email', 
        '$password', 
        '$contacto', 
        '$tipo_utilizador',
        '$data',
        '$hora'

        );";

    $executar = mysqli_query($ligacao, $sql) or die("<br>ERRO2:....");

    if($executar = true){
        header('location: postRegisto.php');
    } else {
        echo "<br> ERRO 7";
    }

};

function listagem()
{
    global $ligacao;
    $sql = "SELECT * FROM bd_colllectibles LIMIT 10;";
    $executar = mysqli_query($ligacao, $sql);

    if ($executar == false) {
        echo "erro 4";
    } else {
        while ($registo = mysqli_fetch_array($executar)) {
            echo "<br>" . $registo[0];
            echo " " . $registo[1];
            echo " " . $registo[2];
        }
    }
}

function verificarUtilizador(){

    global $ligacao;

    $email = $_GET['email'];
    $password = $_GET['password'];

    $sql = "SELECT * FROM bd_collectibles WHERE email = '$email' AND password='$password';";
    $executar = mysqli_query($ligacao,$sql) or die ("<br> ERRO 5");
    
    if($registo = mysqli_fetch_array($executar)){
        echo "Olá".$registo['1'];

        session_start();
        $_SESSION['nome'] = $registo[1];
        $_SESSION['tipo_utilizador'] = $registo[7];
        header('location: postLogin.php');
    }else{
        echo "<br> ERRO 6";
    }
}

if(isset($_GET['email'])){
    if($_GET['email'] != ""){
        verificarUtilizador();
    }else{
        echo"<br>Utilizador não encontrado";
    }
}



?>