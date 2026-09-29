<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];

    $_SESSION["nome"] = $nome;

    header("Location: boasvindas.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

<h2>Login</h2>

<form method="POST" action="">
    <label>Nome do usuário:</label>
    <input type="text" name="nome" required>

    <br><br>

    <button type="submit">Entrar</button>
</form>

</body>
</html>
