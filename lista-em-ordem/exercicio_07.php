<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Número Perfeito</title>
</head>
<body>

<h2>Verificar se o número é perfeito</h2>

<form method="get" action="">
    <label for="numero">Digite um número:</label>
    <input type="number" name="numero" id="numero" required>
    <button type="submit">Verificar</button>
</form>

<?php

function somaDivisores($num) {
    $soma = 0;
    for ($i = 1; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            $soma += $i;
        }
    }
    return $soma;
}

if (isset($_GET['numero'])) {
    $numero = intval($_GET['numero']);
    if ($numero == somaDivisores($numero)) {
        echo "O número $numero é perfeito.";
    } else {
        echo "O número $numero não é perfeito.";
    }
}
?>

</body>
</html>
