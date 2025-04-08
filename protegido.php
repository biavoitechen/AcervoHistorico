<?php
session_start();

if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    header('Location: login.php');
    exit;
}

if (!isset($_SESSION['novos_itens'])) {
    $_SESSION['novos_itens'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'] ?? '';
    $categoria = $_POST['categoria'] ?? '';
    $imagem = $_POST['imagem'] ?? '';
    $descricao = $_POST['descricao'] ?? '';

    if ($titulo && $categoria && $imagem && $descricao) {
        $novoItem = [
            'id' => time(), 
            'titulo' => $titulo,
            'categoria' => $categoria,
            'imagem' => $imagem,
            'descricao' => $descricao
        ];

        $_SESSION['novos_itens'][] = $novoItem;
        $mensagem = "Item adicionado com sucesso!";
    } else {
        $erro = "Preencha todos os campos.";
    }
}

include 'includes/cabecalho.php';
?>

<h1>Área Protegida</h1>

<?php if (isset($mensagem)) echo "<p style='color:green;'>$mensagem</p>"; ?>
<?php if (isset($erro)) echo "<p class='erro'>$erro</p>"; ?>

<form method="post" action="protegido.php">
    <label for="titulo">Título:</label>
    <input type="text" name="titulo" id="titulo" required>

    <label for="categoria">Categoria:</label>
    <input type="text" name="categoria" id="categoria" required>

    <label for="imagem">Caminho da imagem (ex: imagens/nome.jpg):</label>
    <input type="text" name="imagem" id="imagem" required>

    <label for="descricao">Descrição:</label>
    <textarea name="descricao" id="descricao" rows="4" required style="width:100%;"></textarea>

    <button type="submit">Adicionar ao Catálogo</button>
</form>

<p><a href="index.php">← Voltar ao catálogo</a></p>

<?php include 'includes/rodape.php'; ?>
