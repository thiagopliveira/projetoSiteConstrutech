<?php
require_once 'init.php';

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];

    foreach ($_SESSION['produtos'] as $index => $produto) {

        if ((int)$produto['id'] === $id) {

            // 🔽 diminui 1 da quantidade
            if ($_SESSION['produtos'][$index]['quantidade'] > 0) {
                $_SESSION['produtos'][$index]['quantidade']--;
            }

            break;
        }
    }
}

header("Location: index.php?removido=1");
exit;