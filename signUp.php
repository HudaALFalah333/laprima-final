<?php
require 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    if (empty($first_name) || empty($last_name) || empty($email) || empty($password)) {
        echo "All fields are required.";
        exit();
    }

    
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (first_name, last_name, email, password) VALUES (:first_name, :last_name, :email, :password)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':first_name', $first_name);
    $stmt->bindParam(':last_name', $last_name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $hashed_password);

    if ($stmt->execute()) {
        header("Location: pageLogin.php");
        exit();
    } else {
        echo "Error: Could not register user.";
    }
}
?>
