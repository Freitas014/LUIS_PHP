<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <?php
        $s = "lampada";
        switch ($s) { //switch verifica qual valor tem a variável $s
            case "casa": //se $s for "casa" imprime o texto abaixo:
                print "A casa é amarela";
                break;
            case "arvore": //se $s for "arvore" imprime o texto abaixo:
                print "a árvore é bonita";
                break;
            case "lampada": //se $s for "lampada" imprime o texto abaixo:
                print "Joao apagou a lampada";
                break;
            default:
                print "Você não selecionou";
                break;
        }
    ?>
    <br><br><address align="center">
        Luís Fernando / Estudante / Técnico Desenvolvimento de Sistemas
    </address>
</body>
</html>