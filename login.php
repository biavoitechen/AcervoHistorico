<?php
session_start();

$usuarioValido = 'bia';
$senhaHash = '$2y$10$4rOHwx/NUhpbx/CYl3IHYuZNOAvOxxzmaGY6FrNHLZryyYY6R6l86'; // senha: a que você usou no gerar_hash.php

$erro = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if ($usuario === $usuarioValido && password_verify($senha, $senhaHash)) {
        $_SESSION['logado'] = true;
        header('Location: protegido.php');
        exit;
    } else {
        $erro = true;
    }
}

include 'includes/cabecalho.php';
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm p-4">
                <h2 class="text-center mb-4">🔐 Área Restrita</h2>

                <?php if ($erro): ?>
                    <div class="alert alert-danger text-center">Usuário ou senha incorretos.</div>
                <?php endif; ?>

                <form method="POST">
                    <div class="mb-3">
                        <label for="usuario" class="form-label">Usuário:</label>
                        <input type="text" id="usuario" name="usuario" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha:</label>
                        <input type="password" id="senha" name="senha" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 fw-bold">Entrar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/rodape.php'; ?>
