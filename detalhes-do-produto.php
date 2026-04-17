<?php

require_once 'init.php';

$id = isset($_GET['id']) ? (int) $_GET['id']: 0;

if(!isset($_SESSION['produtos'])) {
    die("Erro: A sessão de produtos não doi inicializada.");
}

$ids = array_column($_SESSION['produtos'], 'id');
$index = array_search($id,$ids);
if ($index !== false) {
    $produto = $_SESSION['produtos'][$index];
} else {
    header('location: 404.php');
    exit();
}
$produto = $_SESSION['produtos'][$index]; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once 'partials/header.php';
    require_once 'partials/sideBar.php';
    ?>
    <main>
    <img src="<?= $produto['imagem'] ?>" alt="<?= $produto['nome'] ?>">
    
    <div class="caracdoproduto">
        <h3><?= $produto['nome'] ?></h3>
        <p><strong>Preço:</strong> <?= $produto['preco'] ?></p>
        <p><strong>Categoria:</strong> <?= $produto['categoria'] ?></p>
        <p><strong>Descrição:</strong> <?= $produto['descricao'] ?></p>
    </div>
</main>
</body>
</html>