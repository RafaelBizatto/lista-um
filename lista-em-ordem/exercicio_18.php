<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maior Número entre Três</title>
</head>
<body>

<h2>Receber 3 números e informar qual é o maior</h2>

<form method="get" action="">
    <label for="num1">Digite o primeiro número:</label>
    <input type="number" step="any" name="num1" id="num1" required>
    <br>
    <label for="num2">Digite o segundo número:</label>
    <input type="number" step="any" name="num2" id="num2" required>
    <br>
    <label for="num3">Digite o terceiro número:</label>
    <input type="number" step="any" name="num3" id="num3" required>
    <br>
    <button type="submit">Verificar</button>
</form>

<?php

if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3'])) {
    $num1 = floatval($_GET['num1']);
    $num2 = floatval($_GET['num2']);
    $num3 = floatval($_GET['num3']);
    $maior = max($num1, $num2, $num3);
    echo "O maior número entre $num1, $num2 e $num3 é $maior.";
}
?>

</body>
</html>
