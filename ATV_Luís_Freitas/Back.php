<?php
    if (isset($_POST['nome'], $_POST['categoria'], $_POST['valor'], $_POST['medida'], 
              $_POST['quantidade'], $_POST['validade'], $_POST['fornecedor'])) {

        echo "Recebido o Produto: " . $_POST['nome'] . "<br>";
        echo "Categoria: " . $_POST['categoria'] . "<br>";
        echo "Valor: R$" . $_POST['valor'] . "<br>";
        echo "Medida: " . $_POST['medida'] . "<br>";
        echo "Quantidade: " . $_POST['quantidade'] . "<br>";
        echo "Validade: " . $_POST['validade'] . "<br>";
        echo "Fornecedor: " . $_POST['fornecedor'] . "<br>";
    } else {
        echo "⚠️ Algum campo obrigatório não foi preenchido.";
    }
?>
