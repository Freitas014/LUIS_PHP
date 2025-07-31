<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Criando variáveis 
    $Nota = 1;
    $Aprovado = ($Nota >= 7.0);
    
    if ($Nota < 0 || $Nota >10){ //Se a nota for menor que 0 ou maior que 10, imprimi "Nota Inválida" //
        echo "Nota Inválida";
    }
    elseif ($Aprovado) { //Se igual ou maior que 7 imprimi "Você foi aprovado!"
        echo "Você foi aprovado!✅";
    }
    elseif ($Nota == 6) { //Se $Nota igual a 6 imprimi "Você ficou em recuperação, boa sorte!"
        echo "Você ficou em recuperação, boa sorte!👍";
    }
    elseif ($Nota <6){ //Se $Nota menor que 6 imprimi "Você foi reprovado!"
        echo "Você foi reprovado!❌";
    }
?>
    <br><br><address align="center">
        Luís Fernando / Estudante / Técnico Desenvolvimento de Sistemas
    </address>
</body>
</html>