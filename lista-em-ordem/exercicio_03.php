<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Número Positivo, Negativo ou Zero</title>
</head>
<body>

<h2>Informar se um número é positivo, negativo ou zero</h2>

<form method="get" action="">
    <label for="numero">Digite um número:</label>
    <input type="number" name="numero" id="numero" required>
    <button type="submit">Verificar</button>
</form>

<?php

if (isset($_GET['numero'])) {
    $numero = floatval($_GET['numero']);
    if ($numero > 0) {
        echo "O número $numero é positivo.";
    } elseif ($numero < 0) {
        echo "O número $numero é negativo.";
    } else {
        echo "O número é zero.";
    }
}
?>

</body>
</html>
