<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gerenciamento de estoque construtech</title>
    <link rel="stylesheet" href="css/style.css">
  
</head>
<body>
    <?php
    require_once 'partials/header.php' 
    ?>

    <?php
    require_once 'partials/sideBar.php' 
    ?>
    

    <main class="boxMain">
    <div><div class="titleBox">
        <h1 class="titleBox">Aba de Produtos</h1></div>
        <div class=abaProdutos>
        <ol>
        <button><li>Todos</li></button>
        <button><li>Brutos</li></button>
        <button><li>Equipamentos</li></button>
        <button><li>Acabamento</li></button>
    </ol></div>
 
<button> <a href="form.php" target=_blank>Adicionar</a></button>
<button> <a href="form.php" target=_blank>Remover</a></button>

<div class="subtitleContainer">
<h2>Nome do Produto</h2>


<h2>Preço</h2>


<h2>Tipo</h2>


<h2>Quantidade</h2>
</div>

<div class="products">

    <div class="productRow">
        <div><img src="./img/cimento.png" class="imgProduto"></div>
        <div>Saco de Cimento</div>
        <div>50</div>
        <div>Brutos</div>
        <div>15</div>
    </div>

    <div class="productRow">
        <div><img src="./img/cimento.png" class="imgProduto"></div>
        <div>Saco de Areia</div>
        <div>25</div>
        <div>Brutos</div>
        <div>50</div>
    </div>

    <div class="productRow">
        <div><img src="./img/cimento.png" class="imgProduto"></div>
        <div>Furadeira</div>
        <div>189,99</div>
        <div>Equipamentos</div>
        <div>6</div>
    </div>

</div>
</main>


    <?php
    ?>
    

    
    
</body>
</html>