<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter Celsius para Fahrenheit</title>
</head>
<body>

<h2>Converter graus Celsius para Fahrenheit</h2>

<form method="get" action="">
    <label for="celsius">Digite a temperatura em Celsius:</label>
    <input type="number" step="any" name="celsius" id="celsius" required>
    <button type="submit">Converter</button>
</form>

<?php

if (isset($_GET['celsius'])) {
    $celsius = floatval($_GET['celsius']);
    $fahrenheit = ($celsius * 9/5) + 32;
    echo "$celsius °C equivalem a $fahrenheit °F.";
}
?>

</body>
</html>
