<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir Divisores</title>
</head>
<body>

<h2>Exibir todos os divisores de um número</h2>

<form method="get" action="">
    <label for="numero">Digite um número:</label>
    <input type="number" name="numero" id="numero" required>
    <button type="submit">Exibir</button>
</form>

<?php
if (isset($_GET['numero'])) {
    $numero = intval($_GET['numero']);
    echo "Divisores de $numero:<br>";
    for ($i = 1; $i <= $numero; $i++) {
        if ($numero % $i == 0) {
            echo "$i<br>";
        }
    }
}
?>

</body>
</html>
