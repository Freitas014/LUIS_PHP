<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        # index 0123456789012345
        $name = "Stefanie Hatcher";
        $length = strlen($name); // Conta quantos caractéres tem no nome (incluindo espaços)
        $cmp = strcmp ($name, "Brian lee"); //Compara o nome em ordem alfabética. se o $name for maior aparece -1 se o cmp for o maior aparece 1 se for igual é 0
        $index = strpos($name, "e"); 
        $first = substr ($name, 9, 5); //começa a contar 5 caractéres a partir do carácter 9 ou seja, dps de 9 carácteres ele vai contar 5. "123456789101112131415" = "101112131415". 
        $name = strtoupper ($name);
        
        echo ("$name<br>");
        echo ("$length<br>");
        echo ("$cmp<br>");
        echo ("$index<br>");
        echo ("$first<br>");
        echo ("$name<br>");
    ?>
</body>
</html>