<?php
require_once 'init.php';

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];

    foreach ($_SESSION['produtos'] as $index => $produto) {

        if ((int)$produto['id'] === $id) {

            // apaga todo o estoque
            {
                $_SESSION['produtos'][$index]['quantidade'] = ;
            }

            break;
        }
    }
}


header("Location: index.php?removidoitem=1");
exit;