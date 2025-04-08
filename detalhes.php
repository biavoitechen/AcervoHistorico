<?php
session_start();
include 'includes/cabecalho.php';
include 'dados.php';

// Adiciona também os itens criados pela sessão, se houver
if (isset($_SESSION['novos_itens'])) {
    $itens = array_merge($_SESSION['novos_itens'], $itens);
}

// Captura o ID da URL
$id = $_GET['id'] ?? null;

// Busca o item correspondente
$itemEncontrado = null;
foreach ($itens as $item) {
    if ($item['id'] == $id) {
        $itemEncontrado = $item;
        break;
    }
}
?>

<?php if ($itemEncontrado): ?>
    <h1><?php echo $itemEncontrado['titulo']; ?></h1>

    <img src="<?php echo $itemEncontrado['imagem']; ?>" alt="<?php echo $itemEncontrado['titulo']; ?>" style="max-width: 400px; border-radius: 10px; margin-bottom: 20px;">

    <p><strong>Categoria:</strong> <?php echo $itemEncontrado['categoria']; ?></p>
    <p style="font-size: 1.1em;"><?php echo $itemEncontrado['descricao']; ?></p>

    <a href="index.php">← Voltar ao catálogo</a>

<?php else: ?>
    <p style="color: red;">Item não encontrado.</p>
    <a href="index.php">← Voltar ao catálogo</a>
<?php endif; ?>

<?php include 'includes/rodape.php'; ?>
