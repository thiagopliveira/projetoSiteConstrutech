<?php
require_once 'init.php';

$id = isset($_GET['id']) ? (int) $_GET['id']: 0;
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
        <img src="<?php $produto['imagem'] ?>" alt="">
        <div class="caracdoproduto">
            <h3><?php $produto['nome'] ?></h3>
            <p> <strong>Preço:</strong> <?php $produto['preco'] ?></p>
            <p> <strong>Categoria</strong> <?php $produto['categoria'] ?></p>
            <p> <strong></strong> <?php $produto['descricao'] ?></p>
        </div>
    </main>
</body>
</html>