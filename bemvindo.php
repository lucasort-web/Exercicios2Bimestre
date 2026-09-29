<?php
session_start();

if (!isset($_SESSION["nome"])) {
    header("Location: login.php");
    exit;
}

$nome = $_SESSION["nome"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Boas-vindas</title>
</head>
<body>

<h1>Bem-vindo, <?php echo $nome; ?>!</h1>

<p>Você realizou o login com sucesso.</p>

</body>
</html>