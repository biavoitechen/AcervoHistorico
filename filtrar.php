<?php 
include 'includes/cabecalho.php';
include 'dados.php';
include 'funcoes.php';

if (isset($_SESSION['novos_itens'])) {
    $itens = array_merge($_SESSION['novos_itens'], $itens);
}

$categoriaEscolhida = $_GET['categoria'] ?? '';
?>

<div class="container mt-4">
    <h1 class="mb-4 text-center fw-bold">🔎 Filtrar por Categoria</h1>

    <form method="get" class="mb-4 text-center">
        <label for="categoria" class="form-label me-2">Escolha a categoria:</label>
        <select name="categoria" id="categoria" class="form-select d-inline-block w-auto">
            <option value="">Todas</option>
            <?php 
                $todasCategorias = array_unique(array_column($itens, 'categoria'));
                foreach ($todasCategorias as $categoria) {
                    $selected = ($categoriaEscolhida == $categoria) ? 'selected' : '';
                    echo "<option value=\"$categoria\" $selected>$categoria</option>";
                }
            ?>
        </select>
        <button type="submit" class="btn btn-primary ms-2">Filtrar</button>
    </form>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <?php
        $temResultado = false;
        foreach ($itens as $item) {
            if ($categoriaEscolhida === '' || $item['categoria'] === $categoriaEscolhida) {
                exibirItem($item);
                $temResultado = true;
            }
        }

        if (!$temResultado) {
            echo '<p class="text-center">Nenhum item encontrado para essa categoria.</p>';
        }
        ?>
    </div>
</div>

<?php include 'includes/rodape.php'; ?>
