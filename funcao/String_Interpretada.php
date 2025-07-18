<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
</head>
<body>
    <?php
        $age = 16;
        print "Você tem " .$age. "anos <br>";
        //String dentro de "" são interpretadas
        //Variáveis que aparecem deles terçao seus valores inseridos na string
        //string dentro de '' não serão interpretadas:
        print "Você tem $age anos.<br>";
        print ' Você tem $age anos<br>';
    ?>
    <br>
    <?php
        $cidade = "Joinville";
        $festival = "Flores";
        $idade = "174";
        $frase_capital = "A cidade de $cidade é a capital das $festival";
        $frase_idade = "$cidade tem mais de $idade anos";
        echo "<h3>$frase_capital </h3>";
        echo "<h4>$frase_idade </h4>";
    ?>
    <br>
    <?php
        print "Hoje é seu aniversário de $ageth anos.<br>"; # $ageth not found
        print "Hoje é seu aniversário de ($age) anos.<Br>"
        //Se necessário para ambiguidade, pode incluir a variável em {}
    ?>
    <br><br><address align="center">
        Luís Fernando / Estudante / Técnico Desenvolvimento de Sistemas
    </address>
</body>
</html>