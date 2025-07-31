<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senha - Cripto</title>

    <style>
        labe {
            display: inline-block;
            width: 100px;
        }
    </style>
</head>

<body>
    <form method="post" action="postzin.php">
        <label for="usuario">Usuário: </label>
        <input type="text" name="usuario" id="usuario" required>
        <label for="senha">Senha: </label>
        <input type="password" name="senha" id="senha" required>
        <br>
        <input type="reset" value="Limpar" name="limpar">
        <input type="submit" value="Enviar" name="enviar">
        
    </form>
    <br><br><address align="center">
        Luís Fernando / Estudante Técnico Desenvolvimento de Sistemas
    </address>
</body>
        
</html>