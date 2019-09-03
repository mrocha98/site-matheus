<?php
@session_start();
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])){
    header('Location: loginForm.php');
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
$md5 = md5($senha);
$query = "SELECT * FROM USUARIO WHERE USUARIO = '{$usuario}' AND SENHA = '{$md5}'";
$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['usuario'] = $usuario;
    header('location: painelAdm.php');
    exit();
}else{
    $_SESSION['nao_autenticado'] = true;
    header('location: loginForm.php');
    exit();
}