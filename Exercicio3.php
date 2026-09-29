<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 3</title>
</head>
<body>

<h2>Somar dois números</h2>

<form method="POST" action="">
    <label>Primeiro número:</label>
    <input type="number" name="numero1" required>

    <br><br>

    <label>Segundo número:</label>
    <input type="number" name="numero2" required>

    <br><br>

    <button type="submit">Somar</button>
</form>

<?php
if (isset($_POST["numero1"]) && isset($_POST["numero2"])) {

    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];

    echo "<h3>Tipos dos valores:</h3>";

    var_dump($numero1);
    echo "<br>";
    var_dump($numero2);

    echo "<br><br>";

    $soma = $numero1 + $numero2;

    echo "Soma: ";
    print($soma);
}
?>

</body>
</html>