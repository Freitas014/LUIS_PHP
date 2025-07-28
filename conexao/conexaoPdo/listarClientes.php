<?php 
//PDO :) - BackEnd do Listar Cliente
require 'conexao.php';

$conexao = conectarBanco();
$stmt = $conexao->prepare("SELECT * FROM cliente");
$stmt -> execute(); 
$clientes = $stmt -> fetchAll();

?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Lista de Clientes</h2>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Endedeço</td>
            <td>Telefone</td>
            <td>Email</td>
        </tr>
        <?php foreach($clientes as $cliente): ?>
            <tr>
            <td><?= htmlspecialchars($cliente["id"]) ?></td>
                <td><?=htmlspecialchars($cliente["nome"]) ?></td>
                <td><?=htmlspecialchars($cliente["endereco"]) ?></td>
                <td><?=htmlspecialchars($cliente["telefone"]) ?></td>
                <td><?=htmlspecialchars($cliente["email"]) ?></td> <!-- = htmlspecialchars: Evita probelmas de segurança ao exibir dados -->
        </tr>
        <?php endforeach; ?>
</table>
</body>
</html>