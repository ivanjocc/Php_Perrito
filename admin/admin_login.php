<?php
session_start();


$admin_username = 'admin';
$admin_password = '123';

// Check administrator credentials on form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check administrator credentials
    if ($username === $admin_username && $password === $admin_password) {
        $_SESSION['admin'] = true;
        header('Location: admin_dashboard.php');
        exit;
    } else {
        $error_message = "Invalid credentials";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
</head>
<body>
    <h1>Admin Login</h1>
    <?php if (isset($error_message)) : ?>
        <p><?php echo $error_message; ?></p>
    <?php endif; ?>
    <form method="post" action="">
        Username: <input type="text" name="username"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" value="Log In">
    </form>
    <a href="../index.php">Go Back</a>
</body>
</html>
