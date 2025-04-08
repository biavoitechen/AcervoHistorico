<?php
include 'includes/cabecalho.php';
include 'dados.php';
include 'funcoes.php';

// Pega a categoria enviada por GET (se houver)
$categoriaEscolhida = $_GET['categoria'] ?? '';
?>

<h1>Filtrar por Categoria</h1>

<form method="get" action="filtrar.php">
    <label for="categoria">Escolha a categoria:</label>
    <select name="categoria" id="categoria">
        <option value="">-- Todas --</option>
        <option value="Antigo Egito" <?php if($categoriaEscolhida == 'Antigo Egito') echo 'selected'; ?>>Antigo Egito</option>
        <option value="Grécia Antiga" <?php if($categoriaEscolhida == 'Grécia Antiga') echo 'selected'; ?>>Grécia Antiga</option>
        <option value="Renascimento" <?php if($categoriaEscolhida == 'Renascimento') echo 'selected'; ?>>Renascimento</option>
        <option value="Instrumentos Científicos" <?php if($categoriaEscolhida == 'Instrumentos Científicos') echo 'selected'; ?>>Instrumentos Científicos</option>
    </select>
    <button type="submit">Filtrar</button>
</form>

<hr>

<h2>Resultados:</h2>

<div class="catalogo">
    <?php
    foreach ($itens as $item) {
        if ($categoriaEscolhida == '' || $item['categoria'] == $categoriaEscolhida) {
            exibirItem($item);
        }
    }
    ?>
</div>

<?php
include 'includes/rodape.php';
?>
