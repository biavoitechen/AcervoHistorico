<?php
session_start();

include 'dados.php'; 

if (isset($_SESSION['novos_itens'])) {
    $itens = array_merge($_SESSION['novos_itens'], $itens);
}

include 'includes/cabecalho.php';
include 'funcoes.php';
?>

<?php if (isset($_GET['logout']) && $_GET['logout'] == 1): ?>
    <div class="mensagem-sucesso">
        ✅ Logout realizado com sucesso!
    </div>
<?php endif; ?>

<div class="container text-center">
    <h1 class="titulo-catalogo display-4 fw-bold mb-5">
        🏛️ Catálogo de Curiosidades Históricas
    </h1>
</div>

<div class="container mt-4">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <?php foreach ($itens as $item) {
            exibirItem($item);
        } ?>
    </div>
</div>

<?php include 'includes/rodape.php'; ?>
