<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       //Declara variável numérica
       $umidade = 91;
       //Testa se $umidade airo que 90. Retorna um boolean
       $vaiChover = ($umidade > 92);
       //Testa se $vaiChover é verdadeiro
       if ($vaiChover)
       {
        echo "Vai chover com toda certeza absoluta da terra!";
       }
       elseif ($umidade = $vaiChover)
       {
        echo "Talvez!";
       }

       else {
        echo "Nem ferrando";
       }
    ?>
    <br><br><address align="center">
        Luís Fernando / Estudante / Técnico Desenvolvimento de Sistemas
    </address>
</body>
</html>