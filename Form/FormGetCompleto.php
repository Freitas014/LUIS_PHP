<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário - Get Completo</title>
</head>
<body>
    <form method="get" action="FormGetCompleto.php">
        <label>Nome:</label>
        <input type="text" name="nome" required>
        <label>Idade:</label>
        <input type="number" name="idade" required>
        <input type="submit" value="Enviar">
    </form>
    <?php
        if (isset($_GET['nome']) && isset($_GET['idade'])) {
            echo "Recebido o Cliente ". $_GET['nome'];
            echo "que tem ". $_GET['idade']. " anos";
        }
    ?>
    <br><br><address align="center">
        Luís Fernando / Estudante Técnico Desenvolvimento de Sistemas
    </address>
</body>
</html>