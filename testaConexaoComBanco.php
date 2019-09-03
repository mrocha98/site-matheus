<?php
include('conexao.php');

echo "Testando conexão com o banco de dados....".PHP_EOL;
echo "Usuário: ".USUARIO."\tSenha: ".SENHA.PHP_EOL;
try {
    $con = new PDO('mysql:host=localhost;dbname=LOGIN', USUARIO, SENHA);
    $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    echo "Conectado com sucesso";
} catch (\PDOException $ex) {
    echo $ex->getMessage();
}