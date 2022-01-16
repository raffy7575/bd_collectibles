<?php //funcoescontactos.php

include "ligacao.php";

//diz respeito a pagina de contactos - 
//----------------------------------contactos--------------------------\\
//------------ Verificação da humanização

if(isset($_POST['nome'])){
    if($_POST['nome'] != ""){
        if($_POST['nome']=="4"){
            receberDados();
        }else{
            echo "<br>resposta errada";
        }
    }
}

function receberDados(){
    echo "<br>recebi:";
    echo "<br>".$_POST['name'];
    echo "<br>".$_POST['localidade'];
    echo "<br>".$_POST['pergunta'];

}

//------------ base de Dados bd_contacto

if(isset($_POST['nomeDeContacto'])){
    if($_POST['nomeDeContacto'] != ""){
        inserirContacto();
    }else{
        echo"<br> Existe Campos...";
    }
}
function inserirContacto(){

    global $ligacao;

    date_default_timezone_set("Europe/Lisbon");

    $nomeDeContacto = $_POST['nomeDeContacto'];
    $emailDeContacto = $_POST['emailDeContacto'];
    $contactoDeContacto = $_POST['contactoDeContacto'];
    $horarioDeContacto = $_POST['HorarioDeContacto'];
    $assuntoDeContacto = $_POST['assuntoDeContacto'];
    $mensagemDeContacto = $_POST['mensagemDeContacto'];
    $data = '';
    $hora = '';
echo $horarioDeContacto;
    $sql = "INSERT INTO bd_contactos VALUE (

        '',
        '$nomeDeContacto', 
        '$emailDeContacto',  
        '$contactoDeContacto', 
        '$horarioDeContacto',
        '$assuntoDeContacto',
        '$mensagemDeContacto'

        );";

    $executar = mysqli_query($ligacao, $sql) or die("<br>ERRO2:....");

//-------------------- verificar os campos

    function verificarMensagem(){

        global $ligacao;
    
        $emailDeContacto = $_POST['emailDeContacto'];
        $mensagemDeContacto = $_POST['mensagemDeContacto'];
    
        $sql = "SELECT * FROM bd_contactos WHERE emailDeContacto = '$emailDeContacto' AND mensagemDeContacto='$mensagemDeContacto';";
        $executar = mysqli_query($ligacao,$sql) or die ("<br> ERRO 5");
        
        if($registo = mysqli_fetch_array($executar)){
            echo "Olá sua mensagem foi enviada";
        }else{
            echo "<br> tem campos para preencher ";
        }
    }
}
?>