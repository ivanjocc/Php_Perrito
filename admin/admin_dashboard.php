<?php
session_start();

// Check if the administrator is logged in
if (!isset($_SESSION['admin'])) {
    header('Location: admin_login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Welcome to the Admin Dashboard</h1>
    <p>Hello, Admin!</p>
    <ul>
        <li><a href="manage_products.php">Manage Products</a></li>
        <li><a href="manage_orders.php">Manage Orders</a></li>
        <li><a href="manage_users.php">Manage Users</a></li>
    </ul>
    <a href="logout.php">Log Out</a>
</body>
</html>
