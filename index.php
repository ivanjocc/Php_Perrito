<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Restaurant E-Commerce</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="js/script.js"></script>
</head>
<body>
    <?php include_once('includes/header.php'); ?>
    
    <main>
        <h1>Welcome to Restaurant E-Commerce</h1>
        <p>Discover delicious dishes and more.</p>
        <a href="products/product_list.php">Browse Products</a>
        <br>
        <a href="admin/admin_login.php">Admin Login</a>
    </main>
    
    <?php include_once('includes/footer.php'); ?>
</body>
</html>
