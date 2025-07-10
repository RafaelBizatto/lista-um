<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Par ou Ímpar</title>
</head>
<body>

<h2>Verificar se o número é Par ou Ímpar</h2>

<form method="get" action="">
    <label for="numero">Digite um número:</label>
    <input type="number" name="numero" id="numero" required>
    <button type="submit">Verificar</button>
</form>

<?php

if (isset($_GET['numero'])) {
    $numero = intval($_GET['numero']);

    echo "<p>O número digitado foi: <strong>$numero</strong></p>";

    if ($numero % 2 == 0) {
        echo "<p>Resultado: <strong>$numero é par.</strong></p>";
    } else {
        echo "<p>Resultado: <strong>$numero é ímpar.</strong></p>";
    }
}
?>

</body>
</html>
