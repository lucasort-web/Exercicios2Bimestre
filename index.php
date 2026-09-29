<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 1</title>
</head>
<body>

<h2>Formulário</h2>

<form method="GET" action="">
    <label>Nome:</label>
    <input type="text" name="nome" required>

    <br><br>

    <label>Cidade:</label>
    <input type="text" name="cidade" required>

    <br><br>

    <button type="submit">Enviar</button>
</form>

<?php
if (isset($_GET["nome"]) && isset($_GET["cidade"])) {
    echo "Nome: ";
    echo $_GET["nome"];

    echo "<br>";

    echo "Cidade: ";
    echo $_GET["cidade"];
}
?>

</body>
</html>