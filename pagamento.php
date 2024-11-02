<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>CyanFit - Pagamento</title>
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
            margin: 0;
            background-color: #f5f5f5;
        }
        .container {
            display: flex;
            max-width: 1200px;
            width: 100%;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .form-section, .summary-section {
            padding: 30px;
        }
        .form-section {
            width: 60%;
            border-right: 1px solid #ddd;
        }
        .summary-section {
            width: 40%;
            background-color: #f9f9f9;
        }
        .form-section h2, .summary-section h3 {
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-size: 14px;
            color: #333;
            margin-bottom: 5px;
        }
        .form-group input, .form-group select {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .radio-group {
            display: flex;
            gap: 20px;
            margin-top: 15px;
        }
        .radio-group label {
            font-size: 14px;
            color: #333;
            display: flex;
            align-items: center;
        }
        .radio-group input[type="radio"] {
            margin-right: 5px;
        }
        .checkbox-group {
            display: flex;
            align-items: center;
            font-size: 14px;
            color: #666;
            margin-top: 20px;
        }
        .checkbox-group input[type="checkbox"] {
            margin-right: 5px;
        }
        .btn-finalize {
            width: 100%;
            padding: 15px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            background-color: black;
            color: white;
            cursor: pointer;
            margin-top: 20px;
        }
        .summary-section h3 {
            font-size: 20px;
            margin-bottom: 20px;
        }
        .summary-item {
            display: flex;
            justify-content: space-between;
            font-size: 14px;
            margin-bottom: 10px;
            color: #666;
        }
        .summary-total {
            font-size: 16px;
            font-weight: bold;
            color: #333;
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Formulário de pagamento -->
        <div class="form-section">
            <h2>Qual seu endereço de cobrança?</h2>
            <form>
                <!-- Campos do endereço -->
                <div class="form-group">
                    <label for="cep">CEP</label>
                    <input type="text" id="cep" placeholder="Digite seu CEP">
                </div>
                <div class="form-group">
                    <label for="estado">Estado</label>
                    <select id="estado">
                        <option>Selecione seu estado</option>
                        <option>SP</option>
                        <option>RJ</option>
                        <!-- Outros estados -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="cidade">Cidade</label>
                    <input type="text" id="cidade" placeholder="Digite sua cidade">
                </div>
                <div class="form-group">
                    <label for="bairro">Bairro</label>
                    <input type="text" id="bairro" placeholder="Digite seu bairro">
                </div>
                <div class="form-group">
                    <label for="rua">Rua</label>
                    <input type="text" id="rua" placeholder="Digite sua rua">
                </div>
                <div class="form-group">
                    <label for="numero">Número</label>
                    <input type="text" id="numero" placeholder="Número">
                </div>
                <div class="form-group">
                    <label for="complemento">Complemento</label>
                    <input type="text" id="complemento" placeholder="Complemento">
                </div>

                <!-- Forma de pagamento -->
                <h2>Qual a forma de pagamento?</h2>
                <div class="radio-group">
                    <label>
                        <input type="radio" name="payment-method" value="debito" required> Cartão de Débito
                    </label>
                    <label>
                        <input type="radio" name="payment-method" value="credito" required> Cartão de Crédito
                    </label>
                </div>

                <!-- Campos do cartão -->
                <div class="form-group">
                    <label for="numero-cartao">Número do Cartão</label>
                    <input type="text" id="numero-cartao" placeholder="1234 5678 9012 3456">
                </div>
                <div class="form-group">
                    <label for="nome-cartao">Nome impresso no cartão</label>
                    <input type="text" id="nome-cartao" placeholder="Nome impresso no cartão">
                </div>
                <div class="form-group">
                    <label for="validade-cartao">Data de validade (mm/aa)</label>
                    <input type="text" id="validade-cartao" placeholder="MM/AA">
                </div>
                <div class="form-group">
                    <label for="cvv-cartao">CVV</label>
                    <input type="text" id="cvv-cartao" placeholder="Código de segurança">
                </div>

                <div class="checkbox-group">
                    <input type="checkbox" id="termos" required>
                    <label for="termos">Eu aceito os <a href="#">termos e condições</a> e a <a href="#">política de privacidade</a>.</label>
                </div>

                <button type="submit" class="btn-finalize">Finalizar</button>
            </form>
        </div>

        <!-- Resumo do plano -->
        <div class="summary-section">
            <h3>Plano Fit</h3>
            <div class="summary-item">
                <span>1ª Mensalidade</span>
                <span>R$ 0,00</span>
            </div>
            <div class="summary-item">
                <span>Mensalidades Restantes</span>
                <span>R$ 129,90</span>
            </div>
            <div class="summary-item">
                <span>Taxa de adesão</span>
                <span>R$ 99,90</span>
            </div>
            <div class="summary-total">
                <span>Total</span>
                <span>R$ 229,80</span>
            </div>
            <p>Uma cobrança será gerada a cada mês. Para isto, será feito um teste de cobrança para confirmar o limite do cartão.</p>
        </div>
    </div>
</body>
</html>