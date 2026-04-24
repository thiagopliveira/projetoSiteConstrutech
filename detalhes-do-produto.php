<?php

require_once 'init.php';

$id = isset($_GET['id']) ? (int) $_GET['id']: 0;

if(!isset($_SESSION['produtos'])) {
    die("Erro: A sessão de produtos não foi inicializada.");
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
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Produto</title>
</head>
<body>
    <?php
    require_once 'partials/header.php';
    require_once 'partials/sideBar.php';
    ?>
    <main class="boxMain">
     <div class="titleBox">
        <h1>Produto</h1>
     </div>
    <div class="product-container">
        <div class="product-image-section">
            <img src="<?= $produto['imagem'] ?>" alt="<?= $produto['nome'] ?>" class="main-img">
            </div>

            <div class="product-info-section">
                <h1><?= $produto['nome'] ?></h1>
                <p class="price">R$ <?= number_format($produto['preco'], 2, ',', '.') ?></p>
                
            
                <div class="details">
                <p><strong>Tipo:</strong> <?= $produto['categoria'] ?></p>
                <p><strong>QTD Estoque:</strong> <?= $produto['quantidade'] ?? 'Consultar' ?></p>
                <p class="description"><?= $produto['descricao'] ?></p>
            </div>

            
       <div ><a href="index.php" class="product-return"> Clique aqui para voltar</a></div>
      
    </div>
  </main>
  <?php require_once 'ValorQuantidade.php'; ?>
  
 </body>
</html>