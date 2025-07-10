<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Login</title>
</head>
<body>

<h2>Simular um formulário de login</h2>

<?php
$usuarioFixo = "admin";
$senhaFixa = "123456";

if (isset($_POST['usuario']) && isset($_POST['senha'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    if ($usuario === $usuarioFixo && $senha === $senhaFixa) {
        echo "Login bem-sucedido. Bem-vindo, $usuario!";
    } else {
        echo "Usuário ou senha incorretos.";
    }
} else {
    echo '<form method="POST" action="">';
    echo 'Usuário: <input type="text" name="usuario" required><br>';
    echo 'Senha: <input type="password" name="senha" required><br>';
    echo '<input type="submit" value="Entrar">';
    echo '</form>';
}
?>

</body>
</html>
