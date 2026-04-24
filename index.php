<?php
require_once 'init.php';

// categoria ativa
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

    <?php if (isset($_GET['adicionado'])): ?>
        <p class="aviso-add-estoque">Estoque Adicionado!</p>
    <?php endif; ?>

    <?php if (isset($_GET['removido'])): ?>
        <p class="aviso-removido">Estoque Atualizado!</p>
    <?php endif; ?>

    <?php if (isset($_GET['removidoTudo'])): ?>
        <p class="aviso-removido">Estoque Removido!</p>
    <?php endif; ?>

    <?php if (isset($_GET['deleteitem'])): ?>
        <p class="aviso-removido">Produto Deletado!</p>
    <?php endif; ?>

    <main class="boxMain">

        <!-- TÍTULO -->
        <div class="titleBox">
            <h1>Aba de Produtos</h1>
        </div>

        <!-- FILTROS -->
        <div class="filtros">

            <a href="index.php">
                <button class="<?= $categoria_get == '' ? 'ativo' : '' ?>">
                    Todos
                </button>
            </a>

            <?php foreach($categorias as $kcat => $nome): ?>
                <a href="index.php?categoria=<?= $kcat ?>">
                    <button class="<?= $categoria_get == $kcat ? 'ativo' : '' ?>">
                        <?= $nome ?>
                    </button>
                </a>
            <?php endforeach; ?>

        </div>

        <!-- HEADER -->
        <div class="subtitleContainer">
            <h2></h2>
            <h2>Produto</h2>
            <h2>Preço</h2>
            <h2>Tipo</h2>
            <h2>Quantidade</h2>
            <h2>Ações</h2>
        </div>

        <!-- LISTA -->
        <div class="products">

            <?php foreach($_SESSION['produtos'] as $produto): ?>
            <?php if($categoria_get == '' || $produto['categoria'] == $categoria_get): ?>

            <div class="productRow">

                <div>
        <img src="<?= $produto['imagem'] ?>" class="imgProduto">
        </div>

        <div>
            <?= $produto['nome'] ?>
        </div>

                <!-- PREÇO -->
                <div>
                    R$ <?= number_format($produto['preco'], 2, ',', '.') ?>
                </div>

                <!-- TIPO -->
                <div>
                    <?= ucfirst($produto['categoria']) ?>
                </div>

                <!-- QUANTIDADE -->
                <div class="quantidade">
        <?= $produto['quantidade'] ?>

        <?php if ($produto['quantidade'] == 0): ?>
            <span class="sem-estoque">Sem estoque</span>

        <?php elseif ($produto['quantidade'] < 3): ?>
            <span class="baixo-estoque">Baixo estoque</span>

        <?php elseif ($produto['quantidade'] >=50): ?>
            <span class="estoque-ideal">Estoque ideal</span>
        
        <?php elseif ($produto['quantidade'] >=3 && $produto['quantidade'] <50): ?>
            <span class="estoque-atencao">Atenção ao estoque</span>    

        <?php endif; ?>
    </div>
                <!-- AÇÕES -->
                <div class="acoes">
                    <a href="detalhes-do-produto.php?id=<?= $produto['id'] ?>">
                        Detalhes
                    </a>

                    <a href="add.php?id=<?= $produto['id'] ?>" class="adicionar">
                        +1 Estoque
                    </a>

                    <a href="remove.php?id=<?= $produto['id'] ?>" class="remover">
                        -1 Estoque
                    </a>

                    <a href="removeAll.php?id=<?= $produto['id'] ?>" class="remover-tudo">
                        Zerar 
                    </a>

                    <a href="edit-product.php?id=<?= $produto['id'] ?>" class="editar">
                        <img src="img/simbolo-editar2.png" width ="20px" alt="" srcset="">
                    </a>

                    <a href="delete-item.php?id=<?= $produto['id'] ?>" class="delet-produto">
                        <img src="img/lixeira.png" width ="20px" alt="" srcset="">
                        
                    </a>

                </div>

            </div>

            <?php endif; ?>
            <?php endforeach; ?>

        </div>

        <!-- BOTÃO -->
        <div class="botoes-gerais">
            <a href="form.php" class="btn-add">Adicionar Novo</a>
            
        <a href="reset.php" class="btn-reset">Resetar Estoque</a>
        </div>
        

    </main>

    <?php require_once 'partials/footer.php'; ?>

</body>
</html>