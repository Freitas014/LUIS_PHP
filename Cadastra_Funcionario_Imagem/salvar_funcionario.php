<?php
    // Funcao para redimensionar a imagem
    function redimensionarImagem($imagem, $largura, $altura){
        // Obtem as dimensões originais da imagem.
        // getimagemsize() Retorna a largura e a altura de uma imagem.
        list($larguraOriginal, $alturaOriginal) = getimagesize($imagem);

        // Cria uma nova imagem em branco com as novas dimensões
        // imagecreatetruecolor() cria uma nova imagem em branco em alta qualidade.
        $novaImagem = imagecreatetruecolor($largura, $altura);


        // Carrega a imagem original(JPEG) a partir do arquivo .
        // imagecreatefromjpeg() cria uma imagem php a partir de um jpeg.
        $imagemOriginal = imagecreatefromjpeg($imagem);

        // Copia e redimensiona a imagem original para a nova.
        // imagecopyresampled() copia com redimensionamento e suavização
        imagecopyresampled($novaImagem, $imagemOriginal, 0, 0, 0, 0, $largura, $altura, $larguraOriginal,  $alturaOriginal);

        // Inicia um buffer para guardar a imagem com texto binário
        // ob_start() Inicia o "output buffering" guardando a saída.
        ob_start();

        // imagejpeg() envia a imagem para o output.
        imagejpeg($novaImagem);

        // ob_get_clean pega o conteúdo do buffer e limpa.
        $dadosImagem = ob_get_clean();

        // Libera a memória usada pelas imagens.
        // imagedestroy() Limpa a memória da imagem criada.
        imagedestroy($novaImagem);
        imagedestroy($imagemOriginal);

        // Retorna a imagem redimensionada em formato binário
        return $dadosImagem;
    }

    // Configuração do Banco de Dados.
    $host = 'localhost';
    $dbname = 'bd_imagem';
    $username = 'root';
    $password = '';

    try{
        // Conexão com o Banco de Dados usando PDO.
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Define que erros vão lançar exceçoes.

        // Verifica se foi um POST e se tem arquivo 'foto'
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset ($_FILES['foto'])){

            if($_FILES['foto']['error'] == 0 ){
                $nome = $_POST['nome']; // Pega o nome do funcionário.
                $telefone = $_POST['telefone']; // Pega o telefone do funcionário.
                $nomeFoto = $_FILES['foto']['name']; // Pega o nome original do arquivo.
                $tipoFoto = $_FILES['foto']['type']; // Pega o tipo MIME da imagem.

            // Redimensiona a imagem.
            $foto = redimensionarImagem($_FILES['foto']['tmp_name'], 300, 400); // tmp_name é o caminho temporário

            // Insere no Banco de Dados usando SQL preparada 
            $sql = "INSERT INTO funcionarios (nome, telefone, nome_foto, tipo_foto, foto)
                VALUES(:nome, :telefone, :nome_foto, :tipo_foto, :foto)";

            $stmt = $pdo->prepare($sql); // prepara a query para evitar ataque SQL Injection.
            $stmt->bindParam(':nome', $nome); // Liga os paramentros as variáveis.
            $stmt->bindParam(':telefone', $telefone); // Liga os paramentros as variáveis.
            $stmt->bindParam(':nome_foto', $nomeFoto); // Liga os paramentros as variáveis.
            $stmt->bindParam(':tipo_foto', $tipoFoto); // Liga os paramentros as variáveis.
            $stmt->bindParam(':foto', $foto, PDO::PARAM_LOB); // LOB = large object usado para dados binários com imagens.

            if($stmt -> execute()){
                echo "Funcionario cadastrado com sucesso!";
            } else{
                echo "Erro ao tentar cadastrar o funcionário!";
            }
            
        }else{
            echo "erro ao fazer o UPLOAD da foto! Código : ". $_FILES['foto']['error'];
            }
        }
    } catch(PDOException $e){
        echo "Erro" .$e->getMessage(); // Mostra o erro se houver
    }
?>