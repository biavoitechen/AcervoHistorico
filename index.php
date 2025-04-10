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
    <div class="mensagem-sucesso">
        ✅ Logout realizado com sucesso!
    </div>
<?php endif; ?>

<h1>Catálogo de Curiosidades Históricas</h1>

<div class="container mt-4">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <?php foreach ($itens as $item) {
            exibirItem($item);
        } ?>
    </div>
</div>

<?php
    include 'includes/rodape.php';
?>
