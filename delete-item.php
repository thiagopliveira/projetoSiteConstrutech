<?php
require_once 'init.php';

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];

    foreach ($_SESSION['produtos'] as $index => $produto) {

        if ((int)$produto['id'] === $id) {

            // remove o produto inteiro da sessão
           unset($_SESSION['produtos'][$index]);

           // reorganiza os índices do array
           $_SESSION['produtos'] = array_values($_SESSION['produtos']);

            break;
        }
    }
}


header("Location: index.php?deleteitem=1");
exit;