<?php
session_start();

// Check if the administrator is logged in
if (!isset($_SESSION['admin'])) {
    header('Location: admin_login.php');
    exit;
}

// You can fetch products from the database or create a mock array for demonstration
// Example: $products = fetchProductsFromDatabase();
$products = [
    ['id' => 1, 'name' => 'Product 1', 'price' => 19.99],
    ['id' => 2, 'name' => 'Product 2', 'price' => 29.99],
    // ...
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Products</title>
</head>
<body>
    <h1>Manage Products</h1>
    <table>
        <tr>
            <th>Product ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($products as $product) : ?>
            <tr>
                <td><?php echo $product['id']; ?></td>
                <td><?php echo $product['name']; ?></td>
                <td>$<?php echo $product['price']; ?></td>
                <td>
                    <a href="edit_product.php?id=<?php echo $product['id']; ?>">Edit</a>
                    <a href="delete_product.php?id=<?php echo $product['id']; ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="admin_dashboard.php">Back to Dashboard</a>
</body>
</html>
