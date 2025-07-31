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
    <link rel="stylesheet" href="style_menu.css">
</head>
<body>
<main>
    <h1>Lista de Clientes</h1>
    <table class="table">
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Endedeço</td>
            <td>Telefone</td>
            <td>Email</td>
        </tr>
        <?php foreach($clientes as $cliente): ?>
            <tr>
            <td><?= htmlspecialchars($cliente["id_cliente"]) ?></td>
                <td><?=htmlspecialchars($cliente["nome"]) ?></td>
                <td><?=htmlspecialchars($cliente["endereco"]) ?></td>
                <td><?=htmlspecialchars($cliente["telefone"]) ?></td>
                <td><?=htmlspecialchars($cliente["email"]) ?></td> <!-- = htmlspecialchars: Evita probelmas de segurança ao exibir dados -->
        </tr>
        <?php endforeach; ?>
</table>
</main>
    <div id="sidebar" class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4">Sidebar</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="Menu.php" class="nav-link active" aria-current="page">
                    <svg #id="pag" class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                    Home
                </a>
            </li>
            <li>
                <a href="listarCliente.php" class="nav-link text-white">
                    <svg #id="pag" class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                    Lista de Clientes
                </a>
            </li>
            <li>
                <a href="InserirCliente.php" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                    Cadastrar Clientes
                </a>
            </li>
            <li>
                <a href="atualizarCliente.php" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                    Atualizar Clientes
                </a>
            </li>
            <li>
                <a href="deletarCliente.php" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                    Deletar Clientes
                </a>
            </li>
        </ul>
        <hr>
    </div>
</div>
<footer id="rodape" class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center"> <a href="/"
    class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1" aria-label="Bootstrap"> <svg
    class="bi" width="30" height="24" aria-hidden="true">
    <use xlink:href="#bootstrap"></use>
    <hr>
</svg> </a> <span id= class="mb-3 mb-md-0 text-body-secondary">© 2025 Company, Inc - Luís Fernando</span> </div>
    
</svg></a></li>
</ul>
</footer>
</body>
</html>