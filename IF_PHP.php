<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nome = "Xenia";
        #$nome = NULL;              -->              //Faz a variável ser nula(não ter nada);
        if (isset($nome)) { //isset -> Diz se a variável tem alguma coisa, e se tiver vai imprimir a linha abaixo, se estiver nula não imprime nada.
            print "Essa linha não será encontrada.";
        }
            /*Uma variável é NULL se:
                não foi definido para nenhum valor (variáveis inde)
                foi atribuída a constante NULLfoi deletado usando a função unsetpode testar se uma variável é NULL usando a função */
    ?>
</body>
</html>