<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contar Números Pares</title>
</head>
<body>

<h2>Contar quantos números pares existem entre 1 e o número informado</h2>

<form method="get" action="">
    <label for="numero">Digite um número:</label>
    <input type="number" name="numero" id="numero" required>
    <button type="submit">Contar</button>
</form>

<?php

if (isset($_GET['numero'])) {
    $numero = intval($_GET['numero']);
    $contador = 0;
    for ($i = 1; $i <= $numero; $i++) {
        if ($i % 2 == 0) {
            $contador++;
        }
    }
    echo "Existem $contador números pares entre 1 e $numero.";
}
?>

</body>
</html>
