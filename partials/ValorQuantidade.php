<?php
$valorQuantidade = 0;

if (isset($produto)) {
    $valorQuantidade = $produto['preco'] * $produto['quantidade'];
}
?>

<footer class="footer">
    <div class="footer_dentro">
        <p>
            <img src="img/shopping-cart.png" width="50">
            <strong>QTD Estoque:</strong>
            <?= $produto['quantidade'] ?? 'Consultar' ?>
        </p>

        <p>
            <img src="img/money.png" width="50">
            Valor Total do Produto:
            R$ <?= number_format($valorQuantidade, 2, ',', '.') ?>
        </p>
    </div>
</footer>