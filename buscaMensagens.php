<?php
include('conexao.php');

$query = "SELECT * FROM MENSAGEM";
$result = mysqli_query($conexao, $query) or die("Erro, tabela vazia");

function formataTipo(String $tipo){
    if($tipo == "duvida")
        return "Dúvida";
    elseif ($tipo == "sugestao")
        return "Sugestão";
    return "Elogio";
}

while($dado = $result->fetch_array()){
    $id = $dado['MENSAGEM_ID'];
    $tipo = formataTipo($dado['TIPO']);
    $texto = $dado['TEXTO'];
    echo "<tr><td>{$id}</td><td>{$tipo}</td><td>{$texto}</td></tr>";
}
