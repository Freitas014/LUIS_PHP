<?php
    require_once('conecta.php');

    // Obtem o id da imagem da URL, garantindo que seja um numero inteiro
    $id_imagem = isset($_GET['id'])? intval($_GET['id']):0;

    // Verifica se o id é valido (maior que zero)
    if($id_imagem > 0){
        // Criar a query segura usando o prepared statement
        $queryExclusao = "DELETE FROM imagens WHERE codigo = ?";

        // Prepara a query
        $stmt = $conexao->prepare($queryExclusao);
        $stmt->bind_param("i", $id_imagem); //Define o ID com um inteiro

        // Executa a exclusao
        if($stmt->execute()){
            echo "imagem excluída com sucesso!";
        } else{
            die("Erro ao tentar excluír a imagem!: ". $stmt->error);
        }
    

    // Fecha a consulta
    $stmt->close();
    }else{
        echo "ID Inválido";
    }

    // Redireciona para a index.php e garante que o script pare.
    header("Location: index.php");
    exit();
?>