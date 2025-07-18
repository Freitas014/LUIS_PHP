<?php
    foreach(file("livros.txt") as $livro) {
        list($titulo, $autor) = explode(",", $livro);
?>
    <p> Título: <?= $titulo ?>, Autor: <?= $autor ?> </p>
<?php
    }
?>
<br><br><address align="center">
        Luís Fernando / Estudante / Técnico Desenvolvimento de Sistemas
    </address>