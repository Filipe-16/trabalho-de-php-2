<?php

require_once 'db_connection.php';

$email = $_POST['email'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
$stmt->bind_param("s", $email); 
$stmt->execute(); 
$result = $stmt->get_result(); 
$user = $result->fetch_assoc(); 

if ($user && password_verify($password, $user['senha'])) {
    $_SESSION['email'] = $user['email']; 
    $_SESSION['name'] = $user['nome']; 
 
    header("Location: home.php");

    exit();
}

else {
    echo "Email/Senha Inválidos";
}

?>