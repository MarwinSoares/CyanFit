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
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand cyanlogo" href="home.php">Cyan<strong class="navstr">Fit</strong></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="planos.php">Planos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="area_aluno.php">Área do aluno</a>
              </li>

              
            </ul>
          </div>
        </div>
      </nav>
     
     <div class="row">
      <div class="col-md-6">
        
      </div>
      <div class="col-md-6">
      <div class="form_cad">
          <form action="processar_cad.php">
            <div>
              <label for="nome">Nome:</label>
              <br>
              <input type="text" id="nome" name="nome">
              <br>
              <label for="email">Email</label>
              <br>
              <input type="email" id="email" name="email">
              <br>
            </div>
            <label for="telefone">Telefone</label>
            <br>
            <input type="text" name="dd" placeholder="55">
            <input type="text" name="telefone" placeholder="(11)95923-7933">
            <br>
            <label for="sexo">Sexo</label>
            <br>
            <select name="sexo" id="sexo" required>
              <option value="">Selecione um genero</option>
              <option value="M">Masculino</option>
              <option value="F">Feminino</option>
            </select>
            <br>
            <label for="cpf">CPF</label>
            <br>
            <input type="text" name="cpf" id="cpf">
            <br>
            <label for="senha">Senha:</label>
            <br>
            <input type="password" name="senha" id="senha">
            <br>
            <label for="confirme_senha">Confirme a senha:</label>
            <br>
            <input type="password" id="confi_senha"> 
            <br>
            <input type="submit">         
          </form>
        </div>
      </div>
     </div>
     
</body>
</html>