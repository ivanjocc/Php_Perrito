<?php
session_start();
require_once('../includes/db_connection.php'); // Make sure to provide the correct path to this file

// Verify if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: ../index.php');
    exit;
}

// Get the cart items from the session (example)
$cartItems = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cart</title>
</head>
<body>
    <h1>Your Cart</h1>
    <?php if (count($cartItems) > 0) : ?>
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
            <?php foreach ($cartItems as $item) : ?>
                <tr>
                    <td><?php echo $item['name']; ?></td>
                    <td><?php echo $item['quantity']; ?></td>
                    <td>$<?php echo $item['price']; ?></td>
                    <td>$<?php echo $item['quantity'] * $item['price']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <a href="../orders/order_process.php">Proceed to Checkout</a>
    <?php else : ?>
        <p>Your cart is empty.</p>
    <?php endif; ?>
    <a href="../index.php">Continue Shopping</a>
</body>
</html>
