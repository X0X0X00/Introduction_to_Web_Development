
<?php
session_start();

if(isset($_SESSION['username'])) {
    header("Location: index.php"); // Redirect if already logged in
    exit;
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Perform registration (replace with your own registration logic)
    // For simplicity, storing registration data in session
    $_SESSION['username'] = $_POST['username'];
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Page</title>
</head>
<body>
    <h1>Register</h1>
    <form method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <button type="submit">Register</button>
    </form>
</body>
</html>