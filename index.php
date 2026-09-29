<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 2</title>
</head>
<body>

<h2>Formulário</h2>

<form method="POST" action="">
    <label>Nome:</label>
    <input type="text" name="nome" required>

    <br><br>

    <label>Cidade:</label>
    <input type="text" name="cidade" required>

    <br><br>

    <button type="submit">Enviar</button>
</form>

<?php
if (isset($_POST["nome"]) && isset($_POST["cidade"])) {

    $nome = $_POST["nome"];
    $cidade = $_POST["cidade"];

    echo "Nome: " . $nome;
    echo "<br>";
    echo "Cidade: " . $cidade;

    if ($cidade == "Curitiba") {
        echo "<br>Curitibano!";
    }
}
?>

</body>
</html>