<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Ano Bissexto</title>
</head>
<body>

<h2>Verificar se um ano é bissexto</h2>

<form method="get" action="">
    <label for="ano">Digite um ano:</label>
    <input type="number" name="ano" id="ano" required>
    <button type="submit">Verificar</button>
</form>

<?php

if (isset($_GET['ano'])) {
    $ano = intval($_GET['ano']);
    if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
        echo "O ano $ano é bissexto.";
    } else {
        echo "O ano $ano não é bissexto.";
    }
}
?>

</body>
</html>
