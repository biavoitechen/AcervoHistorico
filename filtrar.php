<?php
session_start();
include 'dados.php';
include 'includes/cabecalho.php';

$categoriaEscolhida = $_GET['categoria'] ?? '';
?>

<div class="container text-center mt-5">
    <h1 class="fw-bold mb-4">
        🎯 Filtrar por Categoria
    </h1>

    <form method="get" action="filtrar.php" class="d-flex justify-content-center">
        <div class="me-2">
            <label for="categoria" class="form-label">Escolha a categoria:</label>
            <select name="categoria" id="categoria" class="form-select" style="width: 300px;">
                <option value="">-- Todas --</option>
                <option value="Antigo Egito" <?php if($categoriaEscolhida == 'Antigo Egito') echo 'selected'; ?>>Antigo Egito</option>
                <option value="Grécia Antiga" <?php if($categoriaEscolhida == 'Grécia Antiga') echo 'selected'; ?>>Grécia Antiga</option>
                <option value="Renascimento" <?php if($categoriaEscolhida == 'Renascimento') echo 'selected'; ?>>Renascimento</option>
                <option value="Instrumentos Científicos" <?php if($categoriaEscolhida == 'Instrumentos Científicos') echo 'selected'; ?>>Instrumentos Científicos</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Filtrar</button>
    </form>
</div>

<hr>

<h2 class="text-center">Resultados:</h2>

<div class="container mt-4">
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
