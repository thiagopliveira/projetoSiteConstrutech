<?php
$totalQuantidade = 0;
$totalValor = 0;

if(isset($_SESSION['produtos']) && is_array($_SESSION['produtos'])) {
    foreach($_SESSION['produtos'] as $produto)   {

        $totalQuantidade += $produto['quantidade'];

        $totalValor += ($produto['preco'] * $produto['quantidade']);
    }
}

?>
<footer class="footer">
    <div class="footer_dentro">
        <p><img src="img/shopping-cart.png" width="50">QTD de produtos: <?= $totalQuantidade ?></p>
        <p><img src="img/money.png" width="50">Valor Total: R$ <?= number_format($totalValor, 2, ',', '.') ?></p>
    </div>
</footer>