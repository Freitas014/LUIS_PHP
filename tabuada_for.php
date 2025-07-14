<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array - Vetor/Matriz</title>
</head>
<body>
    <?php
        $tabuada = array ( 
            array (0,1,2,3,4,5,6,7,8,9,10),
            array (0,1,2,3,4,5,6,7,8,9,10),
            array (0,1,2,3,4,5,6,7,8,9,10),
            array (0,1,2,3,4,5,6,7,8,9,10),
            array (0,1,2,3,4,5,6,7,8,9,10),
            array (0,1,2,3,4,5,6,7,8,9,10),
            array (0,1,2,3,4,5,6,7,8,9,10),
            array (0,1,2,3,4,5,6,7,8,9,10),
            array (0,1,2,3,4,5,6,7,8,9,10),
            array (0,1,2,3,4,5,6,7,8,9,10),);
        for ($linha=1;$linha<11;$linha++)
        {
            for ($coluna=1;$coluna<11;$coluna++)
            {
            echo $tabuada[$linha - 1][$coluna]." x $coluna = ". $linha * $coluna ."<br>"; 
            // O índice [$linha - 1] é usado porque o array $tabuada começa no índice 0,
            // enquanto o loop $linha começa em 1. Isso ajusta o índice do loop para acessar o array corretamente.
            }
        echo "<br>";
    }
    ?>
    <br><br><address align="center">
        Luís Fernando / Estudante / Técnico Desenvolvimento de Sistemas
    </address>
</body>
</html>