<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array - Vetor/Matriz</title>
</head>
<body>
    <?php
        $musicas = array ( 
            array ("Kid Abelha", "Amanhã" , 1993), // Cada linha contém uma banda, música e ano
            array ("Ultrage A Rigor", "Pelados", 1985),
            array ("Paralamas do Sucesso","Alagados", 1987));
        for ($linha=0;$linha<3;$linha++) // Loop externo percorre as linhas
        {
            for ($coluna=0;$coluna<3;$coluna++) // Loop interno percorre as colunas
            {
                echo $musicas[$linha][$coluna]." | "; // Exibe o valor atual da matriz
            }
            echo "<br>"; // Quebra de linha após cada linha da matriz
        }
    ?>
</body>
</html>