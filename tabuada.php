<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><?php
        for ($i = 1; $i < 11; $i++) { //$i começa em 1 e se tiver abaixo de 11 soma mais 1
        for($j = 1; $j < 11; $j++){ //$j começa em 1 e se tiver abaixo de 11 soma mais 1
            print "$i x $j  = ". $i * $j . "<br>";
            
        }
        print "<br>";
    }
    ?>
    </center>
    <br><br><address align="center">
        Luís Fernando / Estudante / Técnico Desenvolvimento de Sistemas
    </address>
</body>
</html>