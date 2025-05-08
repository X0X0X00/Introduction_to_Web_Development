
<?php
session_start();

if(isset($_SESSION['username'])) {
    header("Location: index.php"); // Redirect if already logged in
    exit;
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Perform login validation (replace with your own validation logic)
    $username = "demo"; // Replace with your registered username
    $password = "password"; // Replace with your registered password

    if($_POST['username'] === $username && $_POST['password'] === $password) {
        $_SESSION['username'] = $_POST['username'];
        header("Location: index.php");
        exit;
    } else {
        $error = "Invalid username or password!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
</head>
<body>
    <h1>Login</h1>
    <?php if(isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
