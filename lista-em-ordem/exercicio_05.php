<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Números Amigos</title>
</head>
<body>

<h2>Verificar se dois números formam um número amigo</h2>

<form method="get" action="">
    <label for="num1">Digite o primeiro número:</label>
    <input type="number" name="num1" id="num1" required>
    <br>
    <label for="num2">Digite o segundo número:</label>
    <input type="number" name="num2" id="num2" required>
    <br>
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

if (isset($_GET['num1']) && isset($_GET['num2'])) {
    $num1 = intval($_GET['num1']);
    $num2 = intval($_GET['num2']);
    if ($num1 == somaDivisores($num2) && $num2 == somaDivisores($num1)) {
        echo "Os números $num1 e $num2 são números amigos.";
    } else {
        echo "Os números $num1 e $num2 não são números amigos.";
    }
}
?>

</body>
</html>
