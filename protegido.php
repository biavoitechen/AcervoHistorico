<?php
session_start();

// Bloqueia acesso não autorizado
if (!isset($_SESSION['logado'])) {
    header('Location: login.php');
    exit;
}

// Gera categorias únicas automaticamente com base nos itens
include 'dados.php';
$categorias = array_unique(array_map(function($item) {
    return $item['categoria'];
}, $itens));
sort($categorias); // Ordena as categorias em ordem alfabética

// Lida com o envio do formulário ANTES de qualquer saída HTML
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $novoItem = [
        'id' => uniqid(),
        'titulo' => $_POST['titulo'],
        'categoria' => $_POST['categoria'],
        'imagem' => $_POST['imagem'],
        'descricao' => $_POST['descricao']
    ];

    if (!isset($_SESSION['novos_itens'])) {
        $_SESSION['novos_itens'] = [];
    }

    $_SESSION['novos_itens'][] = $novoItem;
    $_SESSION['sucesso'] = 'Item adicionado com sucesso!';

    header('Location: protegido.php');
    exit;
}

// Agora que os headers foram manipulados, pode exibir HTML
include 'includes/cabecalho.php';
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <h1 class="mb-4 text-center fw-bold">
                🔒 Área Protegida
            </h1>

            <?php if (isset($_SESSION['sucesso'])): ?>
                <div class="alert alert-success text-center">
                    <?= $_SESSION['sucesso'] ?>
                </div>
                <?php unset($_SESSION['sucesso']); ?>
            <?php endif; ?>

            <form action="protegido.php" method="POST" class="bg-light p-4 rounded shadow-sm">
                <div class="mb-3">
                    <label for="titulo" class="form-label fw-bold">Título:</label>
                    <input type="text" class="form-control" name="titulo" id="titulo" required>
                </div>

                <div class="mb-3">
                    <label for="categoria" class="form-label fw-bold">Categoria:</label>
                    <select name="categoria" id="categoria" class="form-select" required>
                        <option value="">Selecione uma categoria</option>
                        <?php foreach ($categorias as $cat): ?>
                            <option value="<?= $cat ?>"><?= $cat ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="imagem" class="form-label fw-bold">Caminho da imagem (ex: imagens/nome.jpg):</label>
                    <input type="text" class="form-control" name="imagem" id="imagem" required>
                </div>

                <div class="mb-3">
                    <label for="descricao" class="form-label fw-bold">Descrição:</label>
                    <textarea class="form-control" name="descricao" id="descricao" rows="5" required></textarea>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary fw-bold">Adicionar ao Catálogo</button>
                </div>
            </form>

            <div class="text-start mt-4">
                <a href="index.php" class="text-decoration-none">← Voltar ao catálogo</a>
            </div>

        </div>
    </div>
</div>

<?php include 'includes/rodape.php'; ?>
