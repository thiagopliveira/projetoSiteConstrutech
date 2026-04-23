<?php
require_once 'init.php';
http_response_code(404);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro 404</title>
    <link rel="stylesheet" href="css/style.php">
    <style>
    </style>
</head>
<body>
    <?php require_once 'partials/header.php'; ?>
    <?php require_once 'partials/sidebar.php'; ?>

    <main>
        <div class="error-block error-background">
            <P class="error-code">ERROR-404</P>
            <h1 class="error-message">Ops... Página não encontrada!</h1>
            <p>A página pode ter sido removida ou você foi encaminhado/a para a página errada.</p>
            <a href="index.php" class="link-404">clique aqui para voltar</a>
        </div>
    </main>
</body>
</html>
