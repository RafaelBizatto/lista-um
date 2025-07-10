<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Voto</title>
</head>
<body>

<h2>Receber nome e idade e informar se a pessoa pode votar</h2>

<form method="get" action="">
    <label for="nome">Digite o nome:</label>
    <input type="text" name="nome" id="nome" required>
    <br>
    <label for="idade">Digite a idade:</label>
    <input type="number" name="idade" id="idade" required>
    <br>
    <button type="submit">Verificar</button>
</form>

<?php

if (isset($_GET['nome']) && isset($_GET['idade'])) {
    $nome = $_GET['nome'];
    $idade = intval($_GET['idade']);
    if ($idade >= 16) {
        echo "$nome, você pode votar.";
    } else {
        echo "$nome, você não pode votar.";
    }
}
?>

</body>
</html>
