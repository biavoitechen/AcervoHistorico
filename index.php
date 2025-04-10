<?php 
    if (isset($_SESSION['novos_itens'])) {
        $itens = array_merge($_SESSION['novos_itens'], $itens);
    }
?>

<?php
    include 'includes/cabecalho.php';
    include 'dados.php';
    include 'funcoes.php';
?>

<?php if (isset($_GET['logout']) && $_GET['logout'] == 1): ?>
    <p style="color: green; text-align: center; font-weight: bold; margin-top: 20px;">
        Logout realizado com sucesso!
    </p>
<?php endif; ?>

<h1>Catálogo de Curiosidades Históricas</h1>

<div class="catalogo">
    <?php
    foreach ($itens as $item) {
        exibirItem($item);
    }
    ?>
</div>

<?php
    include 'includes/rodape.php';
?>
