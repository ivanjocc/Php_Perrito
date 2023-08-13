<?php
session_start();

// Check if the administrator is logged in
if (!isset($_SESSION['admin'])) {
    header('Location: admin_login.php');
    exit;
}

// You can fetch users from the database or create a mock array for demonstration
// Example: $users = fetchUsersFromDatabase();
$users = [
    ['id' => 1, 'username' => 'user1', 'email' => 'user1@example.com'],
    ['id' => 2, 'username' => 'user2', 'email' => 'user2@example.com'],
    // ...
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Users</title>
</head>
<body>
    <h1>Manage Users</h1>
    <table>
        <tr>
            <th>User ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['username']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td>
                    <a href="edit_user.php?id=<?php echo $user['id']; ?>">Edit</a>
                    <a href="delete_user.php?id=<?php echo $user['id']; ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="admin_dashboard.php">Back to Dashboard</a>
</body>
</html>
