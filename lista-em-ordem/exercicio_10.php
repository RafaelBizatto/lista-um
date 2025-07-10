<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequência de Fibonacci</title>
</head>
<body>

<h2>Receber um número e exibir a sequência de Fibonacci até esse número</h2>

<form method="get" action="">
    <label for="numero">Digite um número:</label>
    <input type="number" name="numero" id="numero" required>
    <button type="submit">Exibir</button>
</form>

<?php

if (isset($_GET['numero'])) {
    $numero = intval($_GET['numero']);
    $fib = [0, 1];
    echo "Sequência de Fibonacci até $numero:<br>";
    if ($numero == 0) {
        echo "0";
    } else {
        echo "0, 1";
        $next = 1;
        while ($next <= $numero) {
            echo ", $next";
            $next = $fib[count($fib)-1] + $fib[count($fib)-2];
            $fib[] = $next;
        }
    }
}
?>

</body>
</html>
