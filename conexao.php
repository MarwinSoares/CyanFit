<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$nome_bd = "cyanfit_academy";

$conexao=mysqli_connect($servidor, $usuario, $senha, $nome_bd);

if(!$conexao){
    die ("falha na conexão!".mysqli_connect_error());
}

echo "conexão bem sucedido!!!";
?>