<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>CyanFit - Escolha de Planos</title>
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
        <h2>Escolha o plano mais vantajoso para você:</h2>
        <form id="planForm" action="processar_plano.php" method="POST">
            <div class="plans">
                <!-- Plano Black -->
                <label class="plan plan-highlight">
                    <input type="radio" name="plan" value="Plano Black|15.00|Treine em qualquer academia da CyanFit, seja no Brasil ou na América Latina." class="radio" required>
                    <div class="badge">O mais vantajoso</div>
                    <h3>Plano Black</h3>
                    <p>Treine em qualquer academia da CyanFit, seja no Brasil ou na América Latina. São +1500 unidades em 15 países!</p>
                    <div class="price">R$ 15,00<small>/mês</small></div>
                    <small>no 1º mês, depois R$ 129,90/mês</small><br>
                    <small>12 meses de fidelidade | Adesão: R$ 99,90</small>
                </label>

                <!-- Plano Fit -->
                <label class="plan">
                    <input type="radio" name="plan" value="Plano Fit|20.00|Nosso plano mais econômico para você se exercitar quando e onde quiser na academia de sua escolha." class="radio" required>
                    <h3>Plano Fit</h3>
                    <p>Nosso plano mais econômico para você se exercitar quando e onde quiser na academia de sua escolha.</p>
                    <div class="price">R$ 20,00<small>/mês</small></div>
                    <small>no 1º mês, depois R$ 129,90/mês</small><br>
                    <small>12 meses de fidelidade | Adesão: R$ 99,90</small>
                </label>

                <!-- Plano Smart -->
                <label class="plan">
                    <input type="radio" name="plan" value="Plano Smart|149.90|Nosso plano mensal para você que não quer se comprometer, mas quer treinar em uma academia de alto padrão!" class="radio" required>
                    <h3>Plano Smart</h3>
                    <p>Nosso plano mensal para você que não quer se comprometer, mas quer treinar em uma academia de alto padrão!</p>
                    <div class="price">R$ 149,90<small>/mês</small></div>
                    <small>Sem fidelidade | Adesão: R$ 99,90</small>
                </label>
            </div>

            <div class="buttons">
                <button type="submit">Continuar para o cadastro</button>
            </div>
        </form>
    </div>
</body>
</html>