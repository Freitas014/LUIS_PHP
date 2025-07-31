<?php
    // Conexão do banco de dados
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "empresa_teste";

    // Conexão usando MySQL sem proteção contra SQL injection
    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    // Verifica se há erro na conexão
    if ($conexao ->connect_error) {
        die("Erro de conexão: " . $conexao -> connect_error);
    }

    //Captura os dados do formulário (nome e usuário)
    $nome = $_POST["nome"];

    // Executa a consulta SEM proteção contra SQL injection

    $sql = "SELECT * FROM cliente_teste WHERE nome =  '$nome'";
    $result = $conexao->query($sql);

    // Se houver resultados, o login é considerado bem-sucedido
    if ($result->num_rows > 0) {
        header ("Location: area_restrita.php");
    // Garante que o código para aqui para evitar execução indevida
        exit();
    } else {
        echo "Nome não encontrado.";
    }
    // Fecha a conexão
    $conexao->close();
    ?>