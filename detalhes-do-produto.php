<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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