<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular IMC</title>
</head>
<body>

<h2>Calcular IMC a partir do peso e altura e exibir a categoria</h2>

<form method="get" action="">
    <label for="peso">Digite o peso (kg):</label>
    <input type="number" step="any" name="peso" id="peso" required>
    <br>
    <label for="altura">Digite a altura (cm):</label>
    <input type="number" step="any" name="altura" id="altura" required>
    <br>
    <button type="submit">Calcular</button>
</form>
    
<?php

if (isset($_GET['peso']) && isset($_GET['altura'])) { 
    $peso = floatval($_GET['peso']);
    $altura_cm = floatval($_GET['altura']);
    
    if ($altura_cm <= 0) {
        echo "Altura inválida.";
        exit;
    }

    $altura_m = $altura_cm / 100;

    $imc = $peso / ($altura_m * $altura_m);

    echo "IMC: " . round($imc, 2) . "<br>";

    if ($imc < 18.5) {
        echo "Categoria: Abaixo do peso";
    } elseif ($imc < 25) {
        echo "Categoria: Peso normal";
    } elseif ($imc < 30) {
        echo "Categoria: Sobrepeso";
    } else {
        echo "Categoria: Obesidade";
    }
}

?>

</body>
</html>
