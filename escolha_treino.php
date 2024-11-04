<?php
session_start();
if (isset($_SESSION['erro'])) {
    echo "<div class='alert alert-danger'>" . $_SESSION['erro'] . "</div>";
    unset($_SESSION['erro']); // Limpa a mensagem após exibir
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>CyanFit - Escolha de Treino</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f5f5f5;
            margin: 0;
        }
        .container {
            max-width: 900px;
            width: 100%;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }
        .plans {
            display: flex;
            gap: 15px;
            justify-content: center;
        }
        .plan {
            flex: 1;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fff;
            text-align: left;
            position: relative;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .plan:hover {
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.2);
        }
        .plan-highlight {
            font-weight: bold;
        }
        .plan h3 {
            font-size: 18px;
            margin: 0;
            color: #333;
        }
        .plan p {
            font-size: 14px;
            margin: 10px 0;
            color: #666;
        }
        .plan .price {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin: 10px 0;
        }
        .plan small {
            font-size: 12px;
            color: #666;
        }
        .badge {
            position: absolute;
            top: -10px;
            left: 10px;
            background-color: #007bff;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 12px;
            font-weight: bold;
        }
        .buttons {
            margin-top: 30px;
            display: flex;
            justify-content: center;
        }
        .buttons button {
            padding: 15px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            background-color: black;
            color: white;
            cursor: pointer;
        }
        .radio {
            position: absolute;
            top: 10px;
            right: 10px;
            transform: scale(1.5);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Escolha o treino mais adequado para você:</h2>
        <form id="treinoForm" action="processar_treino.php" method="POST">
            <div class="plans">
                <!-- Treino A -->
                <label class="plan plan-highlight">
                    <input type="radio" name="nome_treino" value="Treino A|Descrição do Treino A" class="radio" required>
                    <div class="badge">Mais Popular</div>
                    <h3>Treino A</h3>
                    <p>Focado em força e resistência, com ênfase em exercícios compostos para ganho de massa muscular.</p>
                    <div class="price">Duração: 3 meses</div>
                    <small>Ideal para iniciantes e intermediários.</small>
                </label>

                <!-- Treino B -->
                <label class="plan">
                    <input type="radio" name="nome_treino" value="Treino B|Descrição do Treino B" class="radio" required>
                    <h3>Treino B</h3>
                    <p>Programa de alta intensidade voltado para queima de gordura e condicionamento cardiovascular.</p>
                    <div class="price">Duração: 2 meses</div>
                    <small>Recomendado para quem busca emagrecimento.</small>
                </label>

                <!-- Treino C -->
                <label class="plan">
                    <input type="radio" name="nome_treino" value="Treino C|Descrição do Treino C" class="radio" required>
                    <h3>Treino C</h3>
                    <p>Treinamento funcional com foco em mobilidade, flexibilidade e fortalecimento do core.</p>
                    <div class="price">Duração: 1 mês</div>
                    <small>Ótimo para recuperação e prevenção de lesões.</small>
                </label>
            </div>

            <div class="buttons">
                <button type="submit">Continuar para a ficha</button>
            </div>
        </form>
    </div>
</body>
</html>
