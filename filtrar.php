<?php 
include 'includes/cabecalho.php';
include 'dados.php';
include 'funcoes.php';

$categoriaEscolhida = $_GET['categoria'] ?? '';
?>

<div class="container mt-5">
    <h1 class="text-center mb-4 fw-bold">🔎 Filtrar por Categoria</h1>

    <form method="get" action="filtrar.php" class="mb-4">
        <label for="categoria" class="form-label fw-bold">Escolha a categoria:</label>
        <select name="categoria" id="categoria" class="form-select">
            <option value="">-- Todas --</option>
            <?php foreach ($categorias as $cat): ?>
                <option value="<?= $cat ?>" <?= ($categoriaEscolhida == $cat) ? 'selected' : '' ?>>
                    <?= $cat ?>
                </option>
            <?php endforeach; ?>
        </select>
        <button type="submit" class="btn btn-primary mt-3">Filtrar</button>
    </form>

    <hr>

    <h2 class="mb-4">🖼️ Resultados:</h2>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <?php
        foreach ($itens as $item) {
            if ($categoriaEscolhida == '' || $item['categoria'] == $categoriaEscolhida) {
                exibirItem($item);
            }
        }
        ?>
    </div>
</div>

<?php include 'includes/rodape.php'; ?>
