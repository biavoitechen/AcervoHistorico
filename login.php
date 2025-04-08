<?php
session_start();

$usuarioValido = 'bia';
$senhaHash = '$2y$10$sm0T7/jTxSjoqVDs5mI0HOIjBxo8hNQvwAVpMcX0B0p7e3vIjDQH2'; // senha: segredo123

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if ($usuario === $usuarioValido && password_verify($senha, $senhaHash)) {
        $_SESSION['logado'] = true;
        header('Location: protegido.php');
        exit;
    } else {
        $erro = "Usuário ou senha incorretos.";
    }
}

include 'includes/cabecalho.php';
?>

<h1>Área Restrita</h1>

<?php if (isset($erro)) echo "<p style='color:red;'>$erro</p>"; ?>

<form method="post" action="login.php">
    <label for="usuario">Usuário:</label>
    <input type="text" name="usuario" id="usuario" required>
    <br>
    <label for="senha">Senha:</label>
    <input type="password" name="senha" id="senha" required>
    <br>
    <button type="submit">Entrar</button>
</form>

<?php include 'includes/rodape.php'; ?>
