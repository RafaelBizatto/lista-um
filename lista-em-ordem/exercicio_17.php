<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar Data</title>
</head>
<body>

<h2>Receber uma data (dia, mês, ano) e validar se é uma data válida</h2>

<form method="get" action="">
    <label for="dia">Dia:</label>
    <input type="number" name="dia" id="dia" required>
    <br>
    <label for="mes">Mês:</label>
    <input type="number" name="mes" id="mes" required>
    <br>
    <label for="ano">Ano:</label>
    <input type="number" name="ano" id="ano" required>
    <br>
    <button type="submit">Validar</button>
</form>

<?php

if (isset($_GET['dia']) && isset($_GET['mes']) && isset($_GET['ano'])) {
    $dia = intval($_GET['dia']);
    $mes = intval($_GET['mes']);
    $ano = intval($_GET['ano']);
    if (checkdate($mes, $dia, $ano)) {
        echo "A data $dia/$mes/$ano é válida.";
    } else {
        echo "A data $dia/$mes/$ano não é válida.";
    }
}
?>

</body>
</html>
