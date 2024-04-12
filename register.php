<?php

require_once 'db_connection.php';

$name = $_POST['name'];
$email = $_POST['email']; 
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO users (nome, email, senha) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $password); 

if($stmt->execute()) {
    $_SESSION['email'] = $email; 
    $_SESSION['name'] = $name; 
   
    header("Location: home.php");
 
    exit();
}

else {
    echo "Erro ao registrar usuário";
}

?>