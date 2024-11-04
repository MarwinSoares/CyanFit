<?php
// Conectar ao banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cyanfit";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Receber dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Hash da senha
$plano_assinado = $_POST['plano_assinado'];
$nome_treino = $_POST['nome_treino']; // Campo para o nome do treino no formulário

// Inserir os dados do usuário na tabela usuarios
$stmt_usuario = $conn->prepare("INSERT INTO usuarios (nome, email, telefone, senha, plano_assinado) VALUES (?, ?, ?, ?, ?)");
$stmt_usuario->bind_param("sssss", $nome, $email, $telefone, $senha, $plano_assinado);

if ($stmt_usuario->execute()) {
    // Obter o último ID inserido para o usuário
    $id_usuario = $conn->insert_id;

    // Inserir os dados do treino na tabela treinos
    $stmt_treino = $conn->prepare("INSERT INTO treinos (nome_treino, id_usuario) VALUES (?, ?)");
    $stmt_treino->bind_param("si", $nome_treino, $id_usuario);

    if ($stmt_treino->execute()) {
        // Redirecionar para a página de escolha de treino, passando o id do usuário
        header("Location: ficha_treino.php?id_usuario=$id_usuario");
    } else {
        echo "Erro ao cadastrar treino: " . $stmt_treino->error;
    }
} else {
    echo "Erro ao cadastrar usuário: " . $stmt_usuario->error;
}

// Fechar as declarações e a conexão
$stmt_usuario->close();
$stmt_treino->close();
$conn->close();
?>
