<?php
require 'conexao.php';

if($_SERVER["REQUEST_METHOD"]=="POST") {
    $conexao=conectarBanco();

    $id = filter_var($_POST['id_cliente'], FILTER_SANITIZE_NUMBER_INT); //FILTER_SANITIZE_NUMBER_INT Remove todos os caracteres que não sejam dígitos ou sinais de mais e menos.
    $nome = htmlspecialchars(trim($_POST["nome"])); 
    $endereco = htmlspecialchars(trim($_POST["endereco"]));
    $telefone = htmlspecialchars(trim($_POST["telefone"]));
    $email= filter_var($_POST["email"], FILTER_VALIDATE_EMAIL); //FILTER_VALIDATE_EMAIL -> Vê se tem um Email válido.
    //filter_var -> Garante que o dado informado tenha um formato válido.
    if (!$id || !$email) {
        die("Erro: ID inválido ou email incorreto.");
    }
    $sql = "UPDATE clientes SET nome = :nome, endereco = :endereco, telefone = :telefone, email = :email WHERE id_cliente = :id";

    $stmt = $conexao -> prepare ($sql);
    $stmt -> bindParam(":id", $id, PDO::PARAM_INT);
    $stmt -> bindParam(":nome", $nome);
    $stmt -> bindParam(":endereco", $endereco);
    $stmt -> bindParam(":telefone", $telefone);
    $stmt -> bindParam(":email", $email);
try {
    $stmt -> execute();
    echo "Cliente atualizado com sucesso!";
    } catch (PDOException $e) {
    error_log("Erro ao atualizar cliente: " . $e ->getMessage());
    echo "Erro ao atualizar cliente.";
    }
}
?>