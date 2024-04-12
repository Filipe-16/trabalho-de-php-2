<?php

session_start();

if (isset($_SESSION['email'])) {
    header("Location: home.php");

    exit();
}

if (isset($_POST['login'])) {
    require_once 'login.php';
}

if (isset($_POST['register'])) {
    require_once 'register.php';
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IFRS</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Fazer login</h1>
    <br>
    <form action="index.php" method="post">
        <input type="email" name="email" placeholder="Email:" required><br><br>
        <input type="password" name="password" placeholder="Senha:" required><br><br>
        <button type="submit" name="login">Login</button>
    </form>
    <br><br>
    <h2>Fazer cadastro</h2>
    <br>
    <form action="index.php" method="post">
        <input type="text" name="name" placeholder="Nome:" required><br><br>
        <input type="email" name="email" placeholder="Email:" required><br><br>
        <input type="password" name="password" placeholder="Senha:" required><br><br>
        <button type="submit" name="register">Registrar</button>
    </form>
</body>
</html>