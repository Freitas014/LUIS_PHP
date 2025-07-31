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
    require 'conexao.php';

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $conexao = conectarBanco();

        $id = filter_var($_POST["id_cliente"], FILTER_SANITIZE_NUMBER_INT); //filter_var garante que o dado tem formato valido e FILTER_SANITIZE_NUMBER_INT garante que o numero é inteiro, o primeiro parametro é o que verifica e o segundo parametro é o formato, nesse caso FILTER_SANITIZE_NUMBER_INT garante que o numeros seja int removendo todos os caracteres não numericos de id
        $nome = htmlspecialchars(trim($_POST["nome"]));
        $endereco = htmlspecialchars(trim($_POST["endereco"]));
        $telefone = htmlspecialchars(trim($_POST["telefone"]));
        $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL); //usa o filter_var da mesma forma do primeiro porem com email

        if(!$id || !$email){
            die("Erro: ID invalido ou e-mail incorreto.");
        }

        $sql = "UPDATE cliente SET nome=:nome,endereco=:endereco,telefone=:telefone,email=:email WHERE id_cliente = :id";
        
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->bindParam(":nome",$nome);
        $stmt->bindParam(":endereco",$endereco);
        $stmt->bindParam(":telefone",$telefone);
        $stmt->bindParam(":email",$email);

        try{
            $stmt->execute();
           echo "Cliente atualizado com sucesso!";
        }catch(PDOException $e){
            error_log("Erro ao atualizar cliente: ".$e->getMessage());
            echo "Erro ao atualizar registro.";
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