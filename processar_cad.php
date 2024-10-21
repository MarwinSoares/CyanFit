<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include_once('conexao.php');
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $telefone = $_POST["telefone"];
    $estado = $_POST["estado"];
    $cidade = $_POST["cidade"];
    $senha_cripto = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nome, email, senha, telefone, estado, cidade) VALUES (?,?,?,?,?,?)";
    $stmt = $conexao->prepare($sql);

    if ($stmt === FALSE) {
        die("Erro na preparação no cadastro: " . $conexaoo->error);
    }
    $stmt->bind_param("ssssss", $nome, $email, $senha_cripto, $telefone, $estado, $cidade);

    if ($stmt->execute()) {
        header("location: treinos.php");
        exit();
    } else {
        die("Erro na execução da consulta: " - $conexao->error);
    }
}
?>
