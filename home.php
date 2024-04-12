<?php

session_start();

if (!isset($_SESSION['email'])) {

    header("Location: index.php");
   
    exit();
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
            display: flex;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1>Bem-vindo, <?php echo $_SESSION['name']; ?></h1>
        <a href="logout.php">Fazer Logout</a>
    </div>
</body>
</html>