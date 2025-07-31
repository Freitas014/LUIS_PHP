<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>processar Insercao</title>
    <link rel="stylesheet" href="style_menu.css">
</head>
<body>
    <main>
    <?php
    
    require_once 'conexao.php';
    if($_SERVER["REQUEST_METHOD"]=="POST") {
        $conexao = conectarBanco();
    
        $id = filter_var($_POST["id_cliente"], FILTER_SANITIZE_NUMBER_INT);
    
        if(!$id) {
            die("Erro: ID inválido.");
        }
    
    
    $sql = "DELETE FROM cliente WHERE id_cliente = :id";
    $stmt = $conexao -> prepare($sql);
    $stmt ->bindParam(":id", $id, PDO::PARAM_INT);
    
    try{
        $stmt -> execute();
        echo "Cliente excluído com sucesso!";
        } catch (PDOException $e) {
        error_log("Erro ao excluir cliente: " . $e->getMessage());
        echo "Erro ao excluir cliente.";
        }
    }
    ?>
    </main>
    
</body>
</html>
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