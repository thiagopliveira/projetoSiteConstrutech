
<?php
$valorQunatidade = 0;

if(isset($_SESSION['produtos']) && is_array($_SESSION['produtos'])) {
    foreach($_SESSION['produtos'] as $produto)   {

        $valorQuantidade = ($produto['preco'] * $produto['quantidade']);
    }
}
?>
<footer class="footer">
    <div class="footer_dentro">
        <p><strong>QTD Estoque:</strong> <?= $produto['quantidade'] ?? 'Consultar' ?></p>
        <p>Valor Total do Produto: R$ <?=  number_format($valorQuantidade, 2, ',', '.') ?></p>
    </div>
</footer>