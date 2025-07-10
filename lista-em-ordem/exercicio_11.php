<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Palíndromo</title>
</head>
<body>

<h2>Verificar se uma palavra é um palíndromo</h2>

<form method="get" action="">
    <label for="palavra">Digite uma palavra:</label>
    <input type="text" name="palavra" id="palavra" required>
    <button type="submit">Verificar</button>
</form>

<?php
//$_GET['palavra']: É o valor que o usuário digitou no formulário.
if (isset($_GET['palavra'])) {
    //strtolower: Converte todas as letras para minúsculas, para evitar erro na comparação.
    //("/[^a-zA-Z0-9]/", "", $_GET['palavra']): Essa função remove todos os caracteres que não são letras ou números
    $palavra = strtolower(preg_replace("/[^a-zA-Z0-9]/", "", $_GET['palavra']));
    $reverso = strrev($palavra);
    if ($palavra === $reverso) {
        echo "A palavra é um palíndromo.";
    } else {
        echo "A palavra não é um palíndromo.";
    }
}
?>

</body>
</html>
