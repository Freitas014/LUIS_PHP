<?php
    // Inclui o arquivo de conexão com o banco de dados
    require_once 'conexao.php';

    // estabelece conexão
    $conexao = conectadb();

    // Define a consulta SQL para buscar clientes
    $sql = "SELECT id_cliente, nome, email FROM cliente";

    // Executa a consulta no banco
    $result = $conexao->query($sql);

    // Verifica se registros retornados
    if ($result->num_rows > 0) {
        // Itera sobre os resultados e exibe os dados
        while($linha = $result->fetch_assoc()) { // mysqli_fetch_assoc não deixa trazer índice repetido
            echo "ID: <br>" . $linha["id_cliente"] . " - Nome: " . $linha["nome"] . " - Email: " . $linha["email"] . "<br>";}
        } else {
            // Caso nenhum resultado seja encontrado
            echo "Nehum cliente cadastrado.";
        }
        
            // Fecha a conexão com o banco de dados
            $conexao->close();
?>