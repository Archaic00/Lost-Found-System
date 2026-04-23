<?php
include "db.php";
session_start();

$sql = "SELECT * FROM items ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>

<div class="navbar">
    <div class="logo">Lost & Found</div>
    <div class="menu">
        <a href="dashboard.php">Dashboard</a>
        <a href="add_item.php">Add Item</a>
        <a href="logout.php">Logout</a>
    </div>
</div>

<h2>Lost & Found Items</h2>

<div class="container">

<?php while($row = $result->fetch_assoc()) { ?>

<div class="card">
    <h3><?= htmlspecialchars($row['item_name']) ?></h3>
    <p><?= htmlspecialchars($row['description']) ?></p>
    <p><b>Location:</b> <?= $row['location'] ?></p>
    <p><b>Status:</b> <?= $row['status'] ?></p>

    <a href="edit_item.php?id=<?= $row['id'] ?>">✏ Edit</a> |
    <a href="delete_item.php?id=<?= $row['id'] ?>">🗑 Delete</a>
</div>

<?php } ?>

</div>

</body>
</html>