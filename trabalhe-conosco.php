<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="trabalhe-conosco.css">
    <link rel="stylesheet" href="style.css">
    <title>Trabalhe Conosco</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Cyan<strong class="navstr">Fit</strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cadastro</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="text-section">
            <h2>Venha fazer parte da nossa equipe!</h2>
            <p>Estamos sempre em busca de talentos que queiram contribuir com nosso crescimento. Se você é apaixonado pelo que faz e deseja trabalhar conosco, preencha o formulário ao lado e envie seu currículo.</p>
        </div>
        <div class="form-section">
            <form action="/enviar" method="POST" enctype="multipart/form-data">
                <label for="nome">Nome Completo:</label>
                <input type="text" id="nome" name="nome" required>

                <label for="telefone">Telefone:</label>
                <input type="tel" id="telefone" name="telefone" required placeholder="(XX) XXXXX-XXXX">

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="arquivo">Enviar Currículo:</label>
                <input type="file" id="arquivo" name="arquivo" accept=".pdf,.doc,.docx" required>

                <input type="submit" value="Enviar">
            </form>
        </div>
    </div>

    <script>
        document.getElementById('telefone').addEventListener('input', function(e) {
            // Remove tudo que não é dígito
            let value = e.target.value.replace(/\D/g, '');

            // Formata o telefone
            if (value.length > 10) {
                value = value.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
            } else if (value.length > 5) {
                value = value.replace(/(\d{2})(\d{5})(\d{0,4})/, '($1) $2-$3');
            } else if (value.length > 2) {
                value = value.replace(/(\d{2})(\d{0,5})/, '($1) $2');
            }

            e.target.value = value;
        });
    </script>
</body>
</html>
