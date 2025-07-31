<?php
require_once 'conexao.php';

$conexao = conectarBanco();

//Obtendo o ID via GET
$idCliente = $_GET['id'] ?? null;
$cliente = null;
$msgErro = "";

// Função local para buscar cliente por ID
function buscarClientePorId($idCliente, $conexao){
    $stmt = $conexao ->prepare("SELECT id_cliente, nome, endereco, telefone, email FROM cliente WHERE id_cliente = :id");
    $stmt -> bindParam(':id', $idCliente, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch();
}

// Se um ID foi enviado, busca o cliente no banco
if ($idCliente && is_numeric($idCliente)){
    $cliente = buscarClientePorId($idCliente, $conexao);

    if (!$cliente) {
        $msgErro = "cliente não encontrado";
    }
} else {
    $msgErro = "Digite o ID do cliente para buscar os dados.";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Cliente</title>
    <link rel="stylesheet" href="style_menu.css">
    <script>
        function habilitarEdicao(campo) {
            document.getElementById(campo).removeAttribute("readonly");
        }
    
    </script>
</head>
<body>
    <main>
    <h1>Atualizar Cliente</h1>
    <!-- Se houver erro, exibe a mensagem e o campo de busca-->
    <?php if ($msgErro): ?>
        <p style="color:red;"> <?= htmlspecialchars ($msgErro) ?> </p>
        <form action="atualizarCliente.php" method ="get">
            <label for="idCliente">ID do Cliente:</label>
            <input class="form-control" type="number" id="id" name="id" placeholder="Insira o ID do cliente" required>
            <button id="btn" class="btn btn-primary"type="submit">Buscar</button>
        </form>
    <?php else: ?>

    <!-- Se um cliente foi encontrado, exibe o formulário preenchido -->
     <form action="processarAtualizacao.php" method="POST">
        <input type="hidden" name="id_cliente" value ="<?=htmlspecialchars($cliente['id_cliente'])?>">

        <label for="nome">Nome:</label>    
        <input type="text" id="nome" name="nome" value="<?=htmlspecialchars($cliente['nome'])?>" readonly onclick="habilitarEdicao('nome')" class="form-control">
      
        <label for="endereco">Endereço:</label>       
        <input type="text" id="endereco" name="endereco" value="<?=htmlspecialchars($cliente['endereco'])?>" readonly onclick="habilitarEdicao('endereco')" class="form-control">

        <label for="telefone">Telefone:</label>
        <input class="form-control" type="text" id="telefone" name="telefone" value ="<?=htmlspecialchars($cliente['telefone'])?>" readonly onclick="habilitarEdicao('telefone')">
        
        <label for="email">Email:</label>
        <input class="form-control" type="email" id="email" name="email" value ="<?=htmlspecialchars($cliente['email'])?>" readonly onclick="habilitarEdicao('email')">
        <button id="btn" class="btn btn-primary" type="submit">Atualizar Cliente</button>
    </form>
    <?php endif; ?>
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