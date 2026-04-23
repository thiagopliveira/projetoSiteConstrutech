<?php
require_once 'init.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ids = array_column($_SESSION['produtos'], 'id');
    $novoId = $ids ? max($ids) + 1 : 1;

    $_SESSION['produtos'][] = [
        'id' => $novoId,
        'nome' => $_POST['nome'],
        'preco' => $_POST['preco'],
        'descricao' => $_POST['descricao'],
        'quantidade' => $_POST['quantidade'],
        'categoria' => $_POST['categoria'],
        'imagem' => $_POST['imagem']
    ];

    header("Location: index.php?produtoadd=1");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Produto</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<?php require_once 'partials/header.php'; ?>
<?php require_once 'partials/sideBar.php'; ?>

<main class="boxMain">

    <div class="titleBox">
        <h1>Adicionar Produto</h1>
    </div>

    <div class="formContainer">
        <form method="POST" class="formProducts">

            <div class="formGroup">
                <label>Nome do Produto</label>
                <input type="text" name="nome" required>
            </div>

            <div class="formGroup">
                <label>Preço</label>
                <input type="number" step="0.01" name="preco" required>
            </div>

            <div class="formGroup">
                <label>Descrição</label>
                <textarea name="descricao"></textarea>
            </div>

            <div class="formGroup">
                <label>Quantidade</label>
                <input type="number" name="quantidade" required>
            </div>

            <div class="formGroup">
                <label>Categoria</label>
                <select name="categoria" required>
                    <?php foreach($categorias as $kcat => $nome): ?>
                        <option value="<?= $kcat ?>"><?= $nome ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="formGroup">
                <label>URL da Imagem</label>
                <input type="text" name="imagem" placeholder="cole o link da imagem">
            </div>

            <button type="submit" class="btnSalvar">
                Salvar Produto
            </button>

            <div class="product-return"><a href="index.php"> Clique aqui para voltar</a></div>

        </form>
    </div>

</main>

<?php require_once 'partials/footer.php'; ?>

</body>
</html>