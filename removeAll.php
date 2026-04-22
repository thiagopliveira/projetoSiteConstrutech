<?php
require_once 'init.php';

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];

    foreach ($_SESSION['produtos'] as $index => $produto) {

        if ((int)$produto['id'] === $id) {

            // apaga todo o estoque
            if ($_SESSION['produtos'][$index]['quantidade'] > 0) {
                $_SESSION['produtos'][$index]['quantidade'] = 0;
            }

            break;
        }
    }
}


header("Location: index.php?removidoTudo=1");
exit;