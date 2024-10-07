<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include_once('conexao.php');
    $nome = $post["nome"];
    $estado = $post["estado"];
    $cidade = $post["cidade"];
    $email = $post["email"];
    $senha = $post["senha"];
    $senha_cripto = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO alunos (nome, estado, cidade, email, senha,) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conexao->prepare($sql);

    if ($stmt === FALSE) {
        die("Erro na preparação no cadastro: " . $conexaoo->error);
    }
    $stmt->bind_param("sssss", $nome, $estado, $cidade, $email, $senha_cripto,)

    if ($stmt->execute()) {
        header("location: login.php");
        exit();
    } else {
        die("Erro na execução da consulta: " - $conexao->error);
    }
}
?>
