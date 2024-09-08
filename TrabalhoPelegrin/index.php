<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amostradinho</title>
    <link rel="shortcut icon" type="imagex/png" href="./src/images/macaco.png">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <!-- Seção do formulário -->
        <form action="./src/php/processamento.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input required type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome">
            </div>
            <div class="form-group">
                <label for="dataNascimento">Data de Nascimento:</label>
                <input required type="date" class="form-control" id="dataNascimento" name="dataNascimento">
            </div>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea class="form-control" id="descricao" name="descricao" rows="5" placeholder="Escreva uma descrição"></textarea>
            </div>
            <div id="dup">
                <div class="form-group">
                  <label for="texto">Adicionar Competência:</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="texto" name="enviado[]" placeholder="Digite uma competência">
                        <div class="input-group-append">
                            <button type="button" class="btn btn-primary" onclick="duplicar()">Adicionar +</button>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Enviar Formulário</button>
        </form>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="src/scripts/script.js"></script>
</body>
</html>
