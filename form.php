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
    <main class="titleAddProducts">
        <div><h1>Adicionar Produto</h1> 
</div>
    <main class="formProducts">
        <div>
    <H1>Formulário de cadastro</h1>
    <form>
        <label>Nome do Produto</label>
        <input type ="text">
        <br>
        
        <label>Valor</label>
        <input type ="Number">
        <br>

        <label>Descrição</label>
        <input type ="text">
        <br>

        <label>Quantidade</label>
        <input type ="number">
        <br>

        <label>Categoria</label>
        <input type ="select">
        <br>

        <label>Imagem</label>
        <input type ="image">
        <br>

        
        <label>Adicionar</label>
        <input type ="submit">
        <br>
        <label>Remover</label>
        <input type ="submit">
        <br>

    </form> 
</div>
    
</body>
</html>