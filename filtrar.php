<?php
include 'includes/cabecalho.php';
include 'dados.php';
include 'funcoes.php';

$categoriaEscolhida = $_GET['categoria'] ?? '';
?>

<div class="container mt-5">
    <h1 class="mb-4 fw-bold">🎯 Filtrar por Categoria</h1>

    <form method="get" action="filtrar.php" class="mb-5">
        <div class="row g-3 align-items-center">
            <div class="col-md-8">
                <label for="categoria" class="form-label fw-bold">Escolha a categoria:</label>
                <select name="categoria" id="categoria" class="form-select">
                    <option value="">-- Todas --</option>
                    <option value="Antigo Egito" <?= $categoriaEscolhida == 'Antigo Egito' ? 'selected' : '' ?>>Antigo Egito</option>
                    <option value="Grécia Antiga" <?= $categoriaEscolhida == 'Grécia Antiga' ? 'selected' : '' ?>>Grécia Antiga</option>
                    <option value="Renascimento" <?= $categoriaEscolhida == 'Renascimento' ? 'selected' : '' ?>>Renascimento</option>
                    <option value="Instrumentos Científicos" <?= $categoriaEscolhida == 'Instrumentos Científicos' ? 'selected' : '' ?>>Instrumentos Científicos</option>
                </select>
            </div>

            <div class="col-md-4 d-grid mt-4">
                <button type="submit" class="btn btn-primary fw-bold">Filtrar</button>
            </div>
        </div>
    </form>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <?php
        foreach ($itens as $item) {
            if ($categoriaEscolhida == '' || $item['categoria'] == $categoriaEscolhida) {
                exibirItem($item);
            }
        }
        ?>
    </div>

    <div class="text-center mt-5">
        <a href="index.php" class="btn btn-outline-dark fw-bold">← Voltar ao Catálogo</a>
    </div>
</div>

<?php include 'includes/rodape.php'; ?>
