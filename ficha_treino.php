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

// Obter o ID do usuário da URL
$id_usuario = isset($_GET['id_usuario']) ? intval($_GET['id_usuario']) : 0;

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações do Usuário</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0; /* Fundo cinza claro */
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px; /* Largura fixa para centralizar */
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
            font-size: 24px;
        }
        h2 {
            margin-top: 20px;
            font-size: 20px;
        }
        p {
            margin: 10px 0;
        }
    </style>
</head>
<body>

<div class="container">

<?php
if ($id_usuario > 0) {
    // Preparar a consulta para obter os dados do usuário
    $stmt_usuario = $conn->prepare("SELECT nome, plano_assinado FROM usuarios WHERE id_usuario = ?");
    $stmt_usuario->bind_param("i", $id_usuario);
    $stmt_usuario->execute();
    $resultado_usuario = $stmt_usuario->get_result();

    if ($resultado_usuario->num_rows > 0) {
        $usuario = $resultado_usuario->fetch_assoc();
        $nome_usuario = $usuario['nome'];
        $plano_assinado = $usuario['plano_assinado'];

        // Converter o valor do plano em uma string correspondente
        switch ($plano_assinado) {
            case 150:
                $plano_str = "black";
                break;
            case 90:
                $plano_str = "fit";
                break;
            case 80:
                $plano_str = "cyan";
                break;
            default:
                $plano_str = "desconhecido"; // Caso o valor não corresponda a nenhum plano
        }

        // Preparar a consulta para obter o treino escolhido
        $stmt_treino = $conn->prepare("SELECT nome_treino FROM treinos WHERE id_usuario = ?");
        $stmt_treino->bind_param("i", $id_usuario);
        $stmt_treino->execute();
        $resultado_treino = $stmt_treino->get_result();

        // Exibir as informações
        echo "<h1>Informações do Usuário</h1>";
        echo "<p><strong>Nome:</strong> $nome_usuario</p>";
        echo "<p><strong>Plano Assinado:</strong> $plano_str</p>"; // Mostrar o plano como uma string

        if ($resultado_treino->num_rows > 0) {
            echo "<h2>Treino Escolhido:</h2>";
            while ($treino = $resultado_treino->fetch_assoc()) {
                echo "<p>" . htmlspecialchars($treino['nome_treino']) . "</p>";
            }
        } else {
            echo "<p>Nenhum treino encontrado para este usuário.</p>";
        }
    } else {
        echo "<p>Usuário não encontrado.</p>";
    }

    // Fechar as declarações
    $stmt_usuario->close();
    $stmt_treino->close();
} else {
    echo "<p>ID do usuário inválido.</p>";
}

// Fechar a conexão
$conn->close();
?>

</div>
</body>
</html>
