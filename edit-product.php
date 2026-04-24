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
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Atualiza os dados do produto
    $_SESSION['produtos'][$index]['nome'] = $_POST['nome'];
    $_SESSION['produtos'][$index]['preco'] = $_POST['preco'];
    $_SESSION['produtos'][$index]['descricao'] = $_POST['descricao'];
    $_SESSION['produtos'][$index]['quantidade'] = $_POST['quantidade'];
    $_SESSION['produtos'][$index]['categoria'] = $_POST['categoria'];
    $_SESSION['produtos'][$index]['imagem'] = $_POST['imagem'];

    // Redireciona pra evitar reenvio do form
    header("Location: index.php");
    exit();
} 
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de produto</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<?php require_once 'partials/header.php'; ?>
<?php require_once 'partials/sideBar.php'; ?>



<main class="boxMain">

    <div class="titleBox">
        <h1>Editar Produto</h1>
    </div>

    <div class="formContainer">
        <form method="POST" class="formProducts">

            <div class="formGroup">
                <label>Nome do Produto</label>
                <input type="text" name="nome" value="<?= $produto['nome'] ?>" required>
            </div>

            <div class="formGroup">
                <label>Preço</label>
                <input type="number" step="0.01" name="preco" value="<?= $produto['preco'] ?>" required>
            </div>

            <div class="formGroup">
                <label>Descrição</label>
                <textarea name="descricao"required><?= $produto['descricao'] ?></textarea>
            </div>

            <div class="formGroup">
                <label>Quantidade</label>
                <input type="number" name="quantidade"value="<?= $produto['quantidade'] ?>" required>
            </div>

            <div class="formGroup">
                <label>Categoria</label>
                <select name="categoria" required>
    <?php foreach($categorias as $kcat => $nome): ?>
        <option value="<?= $kcat ?>" <?= $produto['categoria'] == $kcat ? 'selected' : '' ?>>
            <?= $nome ?>
        </option>
    <?php endforeach; ?>
</select>
            </div>

            <div class="formGroup">
                <label>URL da Imagem</label>
                <input type="text" name="imagem" placeholder="cole o link da imagem"value="<?= $produto['imagem'] ?>" >
            </div>

            <button type="submit" class="btnSalvar">
                Salvar Produto
            </button>

            <div class="product-return-form"><a href="index.php"> Clique aqui para voltar</a></div>

        </form>
    </div>
</main>
<?php require_once 'partials/footer.php'; ?>


</body>
</html>