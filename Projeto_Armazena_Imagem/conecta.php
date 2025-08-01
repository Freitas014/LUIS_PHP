<?php
    // Definir as credenciais de conexão
    $endereco = "localhost";
    $usuario = "root";
    $senha = "";
    $bancoDados = "armazena_imagem";

    // Criando a conexão usando MySQLi
    $conexao = new mysqli($endereco, $usuario, $senha, $bancoDados);

    // Verificando se há erro de conexão
    if ($conexao->connect_error) {
        die("Falha na conexão: " . $conexao->connect_error);
    }
    
?>