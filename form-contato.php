<?php
require_once 'data.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Produto - <?=$nomeLoja ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<?php require_once 'partials/header.php'; ?>
<?php require_once 'partials/sideBar.php'; ?>

<main class="boxMain">

    <div class="titleBox">
        <h1>Enviar Contato</h1>
    </div>

    <div class="formContainer">
        <form method="POST" class="formProducts">

            <div class="formGroup">
                <label>Nome</label>
                <input type="text" name="nome" required>
            </div>

            <div class="formGroup">
                <label>E-mail</label>
                <input type="email" name="email" required>
            </div>

            <div class="formGroup">
                <label>Telefone</label>
                <input type="number" name="Telefone">
            </div>

            <div class="formGroup">
                <label>Mensagem</label>
                <textarea name="descricao"></textarea>
            </div>

            

            <button type="submit" class="btnSalvar">
                Enviar
            </button>
            <div class="product-return-form"><a href="index.php"> Clique aqui para voltar</div>

        </form>
    </div>

</main>



</body>
</html>