<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <title>Document</title>
</head>
<body class="sideBar">
     <div>
        <input type="checkbox"  class="checkbox" id ="close">
        <div class="overlay"></div>
        <label for="close" class="btn-show-nav">
        <i class="fas fa-bars"></i>
        </label>
      <nav>
        <br>
        </label>
        <a href="#" class="nav-brand"><?=$nomeLoja ?></a>
        <h2>Menu</h2>
        <ul>
            <li><a href="index.php"><i class="fas fa-products"></i>Produtos</a></li>
            <li><a href="form.php"><i class="fas fa-addProducts"></i>Adicionar Produtos</a></li>
            <li><a href="form-contato.php"><i class="fas fa-contact"></i>Formulário para contato</a></li>
        </ul>

   
       
       </nav>
     </div>
 </body>
</html>



 