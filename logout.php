<?php
session_start();
session_destroy();
header("Location: login.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Lost & Found System</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="nav">
    <a href="index.php">Home</a>
    <a href="dashboard.php">Dashboard</a>
    <a href="add_item.php">Add Item</a>
    <a href="login.php">Login</a>
    <a href="register.php">Register</a>
    <a href="logout.php">Logout</a>
</div>

</body>
</html>
<div class="navbar">
    <div class="logo">Lost & Found</div>
    <div class="menu">
        <a href="index.php">Home</a>
        <a href="dashboard.php">Dashboard</a>
        <a href="add_item.php">Add Item</a>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
    </div>
</div>