<?php
require 'Connect.php';
session_start();

if(isset($_POST['login_btn'])){
    $email = $_POST['email'];
    $password = $_POST['password'];  
    $sql= "SELECT * FROM users WHERE email='$email' AND password='$password';" ;
    $result = mysqli_query($conn, $sql);

    $loggedInUser = mysqli_fetch_assoc($result);
    print_r($loggedInUser);

    if ($loggedInUser) {
        $_SESSION['laprima'] = $email;
        header("Location: pagehome2.php");

    } else {
        echo "<script>alert('WRONG USERNAME OR PASSWORD.');</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="CSS/cssLogin.css"> 
    <link rel="stylesheet" href="CSS/cssHome2.css"> 
    <link rel="stylesheet" href="CSS/cssPage.css">
    <script src="JavaScript/pageHome.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
    <?php
       require 'navbar.php';
       ?>
    </header>
    <div class="login-container" id ="login">
        <div class="login-card">
            <img src="Assets/white logo.png" alt="Logo" class="logo-image" style="width: 150px; margin-bottom: 20px;">
            <h2>Login</h2>
            <form method="post">
                <div class="input-group">
                    <label for="email"><i class="fas fa-envelope"></i></label>
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-group">
                    <label for="password"><i class="fas fa-key"></i></label>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>
                <a href="pagehome2.php">
                    <button type="submit" class="login-btn" name="login_btn">Login</button>
                </a>
            </form>
            <div class="signup-link">
                Don't have an account? <a href="pageSignUp.php">Sign up</a>
            </div>
        </div>
    </div>
</body>
</html>