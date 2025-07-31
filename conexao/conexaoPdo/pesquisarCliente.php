    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pesquisar Cliente</title>
        <link rel="stylesheet" href="style_menu.css">
    </head>
    <body>
    <main>
<?php
require_once 'conexao.php';

$conexao = conectarBanco();

$busca = $_GET['busca'] ?? '';

if(!$busca) {
    ?>
    <form action="pesquisarCliente.php" method="GET">
        <label for="busca">Digite o ID ou Nome: </label>
        <input class="form-control" type="text" id="busca" name="busca" required>

        <button id="btn" class="btn btn-primary" type="submit">Pesquisar</button>
    </form>
<?php
    exit;
}
 if(is_numeric($busca)) {
    $stmt = $conexao -> prepare ("SELECT id_cliente, nome, endereco, telefone, email FROM cliente WHERE id_cliente = :id");
    $stmt -> bindParam(":id", $busca, PDO::PARAM_INT);
    }else {
        $stmt = $conexao -> prepare ("SELECT id_cliente, nome, endereco, telefone, email FROM cliente WHERE nome LIKE :nome");
        $buscaNome = "%$busca%";
        $stmt -> bindParam(":nome", $buscaNome, PDO::PARAM_STR);
    }

    $stmt->execute();
    $clientes = $stmt -> fetchAll();
    if(!$clientes) {
        die("Erro: Nehum cliente encontrado com o ID ou Nome informado.");
    }
    ?>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Telefone</th>
                <th>E-mail</th>
                <th>Ação</th>
            </tr>
        
        <?php foreach ($clientes as $cliente): ?>
            <tr>
                <td><?=htmlspecialchars($cliente['id_cliente']) ?></td>
                <td><?=htmlspecialchars($cliente['nome']) ?></td>
                <td><?=htmlspecialchars($cliente['endereco']) ?></td>
                <td><?=htmlspecialchars($cliente['telefone']) ?></td>
                <td><?=htmlspecialchars($cliente['email']) ?></td>
                <td>
                    <a href="atualizarCliente.php?id=<?=$cliente['id_cliente']?>">Editar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </main>
    <footer id="rodape" class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center"> <a href="/"
            class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1" aria-label="Bootstrap"> <svg
            class="bi" width="30" height="24" aria-hidden="true">
            <use xlink:href="#bootstrap"></use>
            <hr>
        </svg> </a> <span id= class="mb-3 mb-md-0 text-body-secondary">© 2025 Company, Inc - Luís Fernando</span> </div>
    </body>
    </html>
