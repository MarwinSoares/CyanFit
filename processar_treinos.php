<?php
session_start();
include 'conexao.php'; // Inclui o arquivo de conexão com o banco de dados

// Verifica se o treino foi selecionado e se o usuário está logado
if (isset($_POST['nome_treino']) && isset($_SESSION['id_usuario'])) {
    $idUsuario = $_SESSION['id_usuario'];
    $treinoSelecionado = $_POST['nome_treino'];
    
    // Divide o valor selecionado em nome e descrição do treino
    list($nomeTreino, $descricaoTreino) = explode('|', $treinoSelecionado);

    try {
        // Insere o treino na tabela 'treinos' com nome e id_usuario
        $sql = "INSERT INTO treinos (nome_treino, id_usuario) VALUES (:nomeTreino, :idUsuario)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nomeTreino', $nomeTreino);
        $stmt->bindParam(':idUsuario', $idUsuario);
        
        // Executa a inserção
        $stmt->execute();

        // Salva as informações na sessão para uso futuro
        $_SESSION['treino_nome'] = $nomeTreino;
        $_SESSION['treino_descricao'] = $descricaoTreino;
        
        // Redireciona para a próxima página (exemplo: ficha_treino.php)
        header("Location: ficha_treino.php");
        exit();
    } catch (PDOException $e) {
        echo "Erro ao salvar o treino: " . $e->getMessage();
    }
} else {
    // Redireciona com erro se o treino ou o ID do usuário não estiverem disponíveis
    $_SESSION['erro'] = "Por favor, selecione um treino ou faça login.";
    header("Location: escolha_treino.php");
    exit();
}
?>
