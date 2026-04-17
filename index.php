<?php
require_once 'init.php';
// Define a categoria atual para saber qual botão marcar como "ativo"
$categoria_get = isset($_GET['categoria']) ? trim($_GET['categoria']) : '';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Construtech</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require_once 'partials/header.php'; ?>
    <?php require_once 'partials/sideBar.php'; ?>

    <?php if (isset($_GET['produtoadd']) && $_GET['produtoadd'] === '1'): ?>
        <p class="aviso">Produto adicionado com sucesso!!!</p>
    <?php endif; ?>

    <main class="boxMain">
        <div class="titleBox">
            <h1 class="titleBox">Aba de Produtos</h1>
        </div>

        <div class="abaProdutos">
            <ol>
                <li><a href="index.php"><button class="<?= $categoria_get == '' ? 'ativo' : '' ?>">Todos</button></a></li>
                <?php foreach($categorias as $kcat => $nome) {
    echo '<a href="index.php?categoria=' . $kcat . '">' . $nome . '</a>';
} ?>
                    <li>
                        <a href="index.php?categoria=<?= $kcat ?>">
                            <button class="<?= $categoria_get == $kcat ? 'ativo' : '' ?>"><?= $nome ?></button>
                        </a>
                    </li>
                <?php  ?>
            </ol>
        </div>

        <div class="subtitleContainer">
            <h2>Produto</h2>
            <h2>Preço</h2>
            <h2>Tipo</h2>
            <h2>Quantidade</h2>
        </div>

        <div class="products">
            <?php 
            // Usamos a variável global que vem do seu data.php (ou $_SESSION)
            foreach($_SESSION['produtos'] as $produto):
                // Lógica de Filtro
                if($categoria_get == '' || $produto['categoria'] == $categoria_get):
            ?>
                <div class="productRow">
                    <div><img src="<?= $produto['imagem'] ?>" class="imgProduto" alt="<?= $produto['nome'] ?>"></div>
                    <div><?= $produto['nome'] ?></div>
                    <div>R$ <?= number_format($produto['preco'], 2, ',', '.') ?></div>
                    <div><?= ucfirst($produto['categoria']) ?></div>
                    <div><?= $produto['quantidade'] ?></div>
                    <div><a href="detalhes-do-produto.php?id=<?php= $produto['id'] ?>">Detalhes</a></div>
                </div>
            <?php 
                endif; 
            endforeach; 
            ?>
        </div>

        <div class="botoes-gerais">
            <a href="form.php" class="btn">Adicionar Novo</a>
        </div>
    </main>
    <?php 
    require_once 'partials/footer.php';
    ?>
</body>
</html>