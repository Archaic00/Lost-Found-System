<?php
include "db.php";

if(isset($_POST['register'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, password)
            VALUES ('$username', '$email', '$password')";

    if($conn->query($sql)){
        header("Location: login.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>

<div class="navbar">
    <div class="logo">Lost & Found</div>
    <div class="menu">
        <a href="index.php">Home</a>
        <a href="login.php">Login</a>
    </div>
</div>

<form method="POST">
    <h2>Register</h2>

    <input type="text" name="username" placeholder="Username" required>

    <input type="email" name="email" placeholder="Email" required>

    <input type="password" name="password" placeholder="Password" required>

    <button type="submit" name="register">Register</button>
</form>

</body>
</html>