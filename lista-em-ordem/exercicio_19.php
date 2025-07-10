<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Senha Forte</title>
</head>
<body>

<h2>Receber uma senha e verificar se ela é forte</h2>

<form method="get" action="">
    <label for="senha">Digite a senha:</label>
    <input type="password" name="senha" id="senha" required>
    <button type="submit">Verificar</button>
</form>

<?php

if (isset($_GET['senha'])) {
    $senha = $_GET['senha'];
    $temNumero = preg_match('/[0-9]/', $senha);
    $temLetra = preg_match('/[a-zA-Z]/', $senha);
    if (strlen($senha) >= 8 && $temNumero && $temLetra) {
        echo "A senha é forte.";
    } else {
        echo "A senha não é forte. Deve ter no mínimo 8 caracteres, incluindo números e letras.";
    }
}
?>

</body>
</html>
