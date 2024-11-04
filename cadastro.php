<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>Cadastro | CyanFit</title>
    <title>Cadastro | CyanFit</title>
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
            display: flex;
            max-width: 900px;
            width: 100%;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .form-section {
            padding: 30px;
            flex: 2;
        }
        .form-section h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }
        .form-section h2 span {
            color: #00bfff; /* Azul claro para "fit" */
        }
        .form-section input, .form-section select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-section p {
            font-size: 12px;
            color: #666;
            line-height: 1.5;
        }
        .form-section button {
            width: 100%;
            padding: 15px;
            background-color: black; /* Botão preto */
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .info-section {
            padding: 30px;
            flex: 1;
            background-color: #f1f1f1;
        }
        .info-section h3 {
            font-size: 20px;
            color: #333;
            margin-bottom: 20px;
        }
        .info-section p {
            font-size: 14px;
            color: #666;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-section">
            <h2>Agora, vamos criar seu cadastro na <span>CyanFit</span>:</h2>
            <form action="processar_cad.php" method="POST">
              
                <label for="nome">Nome completo</label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" required>
                
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="Ex: exemplo@cyanfit.com" required>
                
                
                <label for="telefone">DDD + Celular</label>
                <input type="tel" id="telefone" name="telefone" placeholder="(11) 91234-5678" required>
                
                <label for="nascimento">Data de nascimento</label>
                <input type="date" id="nascimento" name="nascimento" required>

                <label for="plano_assinado">Plano</label>
                <select name="plano_assinado" id="plano_assinado" required>
                  <option value="">....</option>
                  <option value="150">Plano Black R$150,00</option>
                  <option value="90">Plano fit R$90</option>
                  <option value="80">Plano cyan R$80</option>
                </select>

                <label for="treinos">Treinos</label>
                <select name="nome_treino" id="nome_treino">
                  <option value="treino_a">
                  treino A:
                  <br> 
                  Focado em força e resistência, com ênfase em exercícios compostos para ganho de massa muscular.
                  </option>
                  <option value="treino_b">
                  treino B:
                  <br> 
                  Focado em força e resistência, com ênfase em exercícios compostos para ganho de massa muscular.
                  </option>
                  <option value="treino_a">
                  treino C: 
                  <br> 
                  Focado em força e resistência, com ênfase em exercícios compostos para ganho de massa muscular.
                  </option>
                </select>
                
                <p>Utilizamos seus dados pessoais para cadastro e comunicação, de acordo com nossa política de privacidade.</p>
                
                <button type="submit">Continuar cadastro</button>
            </form>
        </div>
    </div>
</body>
</html>