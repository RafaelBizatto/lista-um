<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Fatorial</title>
</head>
<body>

<h2>Calcular o fatorial de um número</h2>

<form method="get" action="">
    <label for="numero">Digite um número:</label>
    <input type="number" name="numero" id="numero" required>
    <button type="submit">Calcular</button>
</form>

<?php

if (isset($_GET['numero'])) {
    $numero = intval($_GET['numero']);
    if ($numero < 0) {
        echo "Fatorial não definido para números negativos.";
    } else {
        $fatorial = 1;
        for ($i = 1; $i <= $numero; $i++) {
            $fatorial *= $i;
        }
        echo "O fatorial de $numero é $fatorial.";
    }
}
?>

</body>
</html>
