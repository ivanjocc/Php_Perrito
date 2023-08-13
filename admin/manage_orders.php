<?php
session_start();

// Check if the administrator is logged in
if (!isset($_SESSION['admin'])) {
    header('Location: admin_login.php');
    exit;
}

// You can fetch orders from the database or create a mock array for demonstration
// Example: $orders = fetchOrdersFromDatabase();
$orders = [
    ['id' => 1, 'user' => 'User 1', 'total' => 50.00, 'status' => 'Pending'],
    ['id' => 2, 'user' => 'User 2', 'total' => 75.00, 'status' => 'Processing'],
    // ...
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Orders</title>
</head>
<body>
    <h1>Manage Orders</h1>
    <table>
        <tr>
            <th>Order ID</th>
            <th>User</th>
            <th>Total</th>
            <th>Status</th>
        </tr>
        <?php foreach ($orders as $order) : ?>
            <tr>
                <td><?php echo $order['id']; ?></td>
                <td><?php echo $order['user']; ?></td>
                <td>$<?php echo $order['total']; ?></td>
                <td><?php echo $order['status']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="admin_dashboard.php">Back to Dashboard</a>
</body>
</html>
