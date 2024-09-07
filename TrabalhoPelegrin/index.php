<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Currículo</title>
    <link rel="shortcut icon" type="imagex/png" href="./src/images/macaco.png">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
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
            <button type="submit" class="btn btn-success">Enviar Formulário</button>
        </form>
    </div>
</body>
</html>