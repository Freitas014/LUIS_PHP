<?php
        if (isset($_GET['nome']) && isset($_GET['idade'])) {
            echo "Recebido o Cliente ". $_GET['nome'];
            echo "<br> que tem: ". $_GET['idade']. " anos";
        }
    ?>