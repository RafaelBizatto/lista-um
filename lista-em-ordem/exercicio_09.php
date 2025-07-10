<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de Números Entre Dois Valores</title>
</head>
<body>

<h2>Receber dois números e exibir a soma de todos os números entre eles</h2>

<form method="get" action="">
    <label for="num1">Digite o primeiro número:</label>
    <input type="number" name="num1" id="num1" required>
    <br>
    <label for="num2">Digite o segundo número:</label>
    <input type="number" name="num2" id="num2" required>
    <br>
    <button type="submit">Calcular</button>
</form>

<?php

if (isset($_GET['num1']) && isset($_GET['num2'])) {
    $num1 = intval($_GET['num1']);
    $num2 = intval($_GET['num2']);
    $inicio = min($num1, $num2);
    $fim = max($num1, $num2);
    $soma = 0;
    for ($i = $inicio; $i <= $fim; $i++) {
        $soma += $i;
    }
    echo "A soma de todos os números entre $inicio e $fim é $soma.";
}
?>

</body>
</html>
