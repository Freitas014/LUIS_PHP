<?php
session_start();

if (!isset($_SESSION['produtos'])) {
    $_SESSION['produtos'] = array(); // Inicia o array se não existir ainda
}

if (isset($_POST['nome'], $_POST['categoria'], $_POST['valor'], $_POST['medida'], 
          $_POST['quantidade'], $_POST['validade'], $_POST['fornecedor'])) {

    // Cria um produto com os dados do POST
    $produto = array(
        'nome' => $_POST['nome'],
        'categoria' => $_POST['categoria'],
        'valor' => $_POST['valor'],
        'medida' => $_POST['medida'],
        'quantidade' => $_POST['quantidade'],
        'validade' => $_POST['validade'],
        'fornecedor' => $_POST['fornecedor']
    );

    // Adiciona o produto na sessão
    $_SESSION['produtos'][] = $produto;

    echo "✅ Produto <strong>" . $_POST['nome'] . "</strong> foi salvo na sessão com sucesso!<br><br>";
} else {
    echo "⚠️ Algum campo obrigatório não foi preenchido.<br><br>";
}

// Exibir todos os produtos armazenados na sessão
if (!empty($_SESSION['produtos'])) {
    echo "<h3>🧾 Lista de Produtos na Sessão:</h3>";
    foreach ($_SESSION['produtos'] as $i => $p) {
        echo "<strong>Produto #" . ($i + 1) . "</strong><br>";
        echo "Nome: " . $p['nome'] . "<br>";
        echo "Categoria: " . $p['categoria'] . "<br>";
        echo "Valor: R$" . $p['valor'] . "<br>";
        echo "Medida: " . $p['medida'] . "<br>";
        echo "Quantidade: " . $p['quantidade'] . "<br>";
        echo "Validade: " . $p['validade'] . "<br>";
        echo "Fornecedor: " . $p['fornecedor'] . "<br><hr>";
    }
} else {
    echo "📭 Nenhum produto foi cadastrado ainda.";
}
?>
