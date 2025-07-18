<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array - Vetor/Matriz</title>
</head>
<body>
    <?php
    $estados = array ("PR", "SC", "RS", "SP", "RJ", "MG", "BA", "RN", "AM");
    echo "ORIGINAL: ";
    echo "<hr>STRTOLOWER: Converte uma string para minúsculas <br>";
    for ($i = 0; $i < count($estados); $i++) { // Removido o ponto e vírgula
        $estados[$i] = strtolower($estados[$i]);
    }
    echo "STROLOWER: "; print_r ($estados);
    echo "<hr> SHIFT: Retira o primeiro elemento de um array<br>";
    $rotaciona = array_shift($estados);
    echo "SHIFT: "; print_r ($estados);
    echo "<hr>POP: Extrai um elemento do final do array<br>";
    array_pop($estados);
    echo "POP: "; print_r ($estados);
    echo "<hr>REVERSE: Retorna um array com os elementos na ordem inversa<br>";
    $inverso = array_reverse($estados);
    echo "REVERSE: "; print_r($inverso);
    echo "<hr>SORT: Ordena um array<br>";
    sort($estados);
    echo "SORT: "; print_r ($estados);
    echo "<hr>SLICE: Extrai uma parcela de um array<br>";
    $dividir = array_slice($estados, 1, 2);
    echo "SLICE :"; print_r ($dividir); echo "<br>";
    ?>
    <br><br><address align="center">
        Luís Fernando / Estudante / Técnico Desenvolvimento de Sistemas
    </address>
</body>
</html>