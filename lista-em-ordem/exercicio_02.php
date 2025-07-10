<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada de um Número</title>
</head>
<body>

<h2>Calcular a tabuada de um número</h2>

<form method="get" action="">
    <label for="numero">Digite um número:</label>
    <input type="number" name="numero" id="numero" required>
    <button type="submit">Calcular</button>
</form>

<?php

if (isset($_GET['numero'])) {
    
    $numero = intval($_GET['numero']);
    
    echo "Tabuada do número $numero:<br>";
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "$numero x $i = $resultado<br>";
    }
}
?>

</body>
</html>
