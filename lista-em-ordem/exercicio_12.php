<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contar Vogais</title>
</head>
<body>

<h2>Receber uma string e exibir a quantidade de vogais</h2>

<form method="get" action="">
    <label for="texto">Digite um texto:</label>
    <input type="text" name="texto" id="texto" required>
    <button type="submit">Contar</button>
</form>

<?php

if (isset($_GET['texto'])) {
    $texto = strtolower($_GET['texto']);
    $vogais = ['a', 'e', 'i', 'o', 'u'];
    $contador = 0;
    for ($i = 0; $i < strlen($texto); $i++) {
        if (in_array($texto[$i], $vogais)) {
            $contador++;
        }
    }
    echo "A string contém $contador vogais.";
}
?>

</body>
</html>
