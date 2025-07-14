<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função - String</title>
</head>
<body>
    <?php
        $vogais = array ("a", "e", "i", "o", "u",
                         "A", "E", "I", "O", "U");
        echo "Hello Wordl of PHP <br>";
        $cons = str_replace ($vogais, "", "Hello Wordl of PHP"); //str_replace substitui as vogais pelo o que está entre aspas (nada)
        echo "Consoantes: ". $cons, "<br>"; // Manda imprimir a consoante($cons)
        //          012345678901
        $test = "Hello World! \n";
        print "Posição da letra 'o' :"; // imprimi a posição da letra 'o' (4ª posição).
        print strpos ($test, "o"). "<br>";
        print "Posição da letra 'o' após 5°: ";
        print "stpos($test, 'o', 5)". "<hr>";  //imprimi a posição da letra 'o' após a 5ª posição.
        // strpos - Retorna a posição da primeira ocorrência de uma substring em uma string
        $message = "troca letra uma a uma";
        echo $message. "<br>";
        //strtr - Substitui caracteres específicos em uma string
        $new_message = strtr($message, 'abcdef', '123456'); // $message = "troca letra uma a uma". 
        //strtr substitui as letras 'abcdef' da frase dentro de $message por '123456'. Ou seja "tro31 l5tr1 um1 1 um1."
        echo "Criptografando: ".$new_message. "<br>"; //imprime o que está na nova mensagem ($new_menssage).
        $new_message = strtr($message, '123456', 'abcdef'); // Troca o que foi criptografado de volta para o original.
        //strtr substitui as letras '123456' da frase dentro de $message por 'abcdef'. Ou seja "troca letra uma a uma."
        echo "Descirptografando: ".$new_message. "<br>"; //imprime o que está na nova mensagem ($new_menssage).      
    ?>
    <br><br><address align="center">
        Luís Fernando / Estudante Técnico Desenvolvimento de Sistemas
    </address>
</body>
</html>