<?php
@session_start();
include('conexao.php');
$tipo = $_POST["tipo"];
$texto = $_POST['texto'];

if(empty($_POST['texto'])){
    header('Location: contato.php');
    exit();
}

$query = "INSERT INTO MENSAGEM (TIPO, TEXTO) VALUES ('{$tipo}', '{$texto}')";
$result = mysqli_query($conexao, $query);
if($result){
    $_SESSION['mensagem-enviada'] = true;
    header('Location: contato.php');
}
exit();

