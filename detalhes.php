<?php
session_start();
include 'includes/cabecalho.php';
include 'dados.php';

if (isset($_SESSION['novos_itens'])) {
    $itens = array_merge($_SESSION['novos_itens'], $itens);
}

$id = $_GET['id'] ?? null;

$itemEncontrado = null;
foreach ($itens as $item) {
    if ($item['id'] == $id) {
        $itemEncontrado = $item;
        break;
    }
}
?>

<?php if ($itemEncontrado): ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1 class="mb-4 fw-bold"><?= $itemEncontrado['titulo'] ?></h1>

                <div class="row align-items-start">
                    <div class="col-md-4 text-center mb-4">
                        <img src="<?= $itemEncontrado['imagem'] ?>" alt="<?= $itemEncontrado['titulo'] ?>" class="img-fluid rounded shadow">
                    </div>

                    <div class="col-md-8">
                        <p><strong>Categoria:</strong> <?= $itemEncontrado['categoria'] ?></p>
                        <p style="font-size: 1.1em; line-height: 1.7;">
                            <?= nl2br($itemEncontrado['descricao']) ?>
                        </p>
                        <a href="index.php" class="btn btn-outline-primary mt-3">← Voltar ao catálogo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php else: ?>
    <div class="container text-center mt-5">
        <p class="text-danger fw-bold">Item não encontrado.</p>
        <a href="index.php" class="btn btn-secondary mt-2">← Voltar ao catálogo</a>
    </div>
<?php endif; ?>

<?php include 'includes/rodape.php'; ?>
