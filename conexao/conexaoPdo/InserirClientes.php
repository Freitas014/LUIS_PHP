<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastri de Cliente</title>
    <link rel="stylesheet" href="style.css"> <!-- Arquivo opcional para estilizar -->
</head>
<body>
    <h2>Cadastro de Clientes</h2>
    <form action="processarInsercao.php" method="POST">
        <label for="nome">Nome: </label>
        <input type="text" id="nome" name="nome" required>

        <label for="nome">Endereco: </label>
        <input type="text" id="endereco" name="endereco" required>

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" required> 

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <button type="submit">Cadastrar Cliente</button>
    </form>
</body>
</html>