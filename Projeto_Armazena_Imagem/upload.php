<?php
   require_once('conecta.php');

   // Obtem os dados enviados pelo formulário 
   $evento = $_POST['evento']; // Pega o que ta lá no evento e joga na variável "$evento".
   $descricao = $_POST['descricao'];
   $imagem = $_FILES['imagem']['tmp_name'];
   $tamanho = $_FILES['imagem']['size']; //tamanho da imagem
   $tipo = $_FILES['imagem']['type']; // tipo da imagem
   $nome = $_FILES['imagem']['name']; // nome da imagem
   
   // Verifica se o arquivo foi enviado corretamente
   if(!empty($imagem) && $tamanho > 0 ) {

   // Le o conteudo do arquivo
   $fp = fopen($imagem, "rb");
   $conteudo = fread($fp, filesize($imagem)); // "fread" -> função do php que vai buscar a imagem.
   fclose($fp);

   // Protege contra problemas de caracteres no SQL
   $conteudo = mysqli_real_escape_string($conexao, $conteudo);

   $queryInsercao = "INSERT INTO imagens (evento, descricao, nome_imagem, tamanho_imagem, tipo_imagem, imagem)
                    VALUES ('$evento','$descricao','$nome','$tamanho', '$tipo', '$conteudo')";

   $resultado = mysqli_query($conexao, $queryInsercao);

   // Verifica se a inserção foi bem sucedida
   if($resultado) {
      echo 'Registro Inserido com Sucesso!';
      header('location: index.php');
      exit();
   } else{
      die("Erro ao inserir no banco: " . mysqli_error($conexao));
   }
}
   else{
      echo "Erro: Nenhuma imagem foi enviada!";
   }

?>