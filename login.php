<!-- login.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="POST" action="login-process.php">
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>


<!-- login-process -->
<?php
session_start();
$usersFile = 'users.txt';

function readData($file) {
    if (file_exists($file)) {
        return unserialize(file_get_contents($file));
    }
    return [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $users = readData($usersFile);
    foreach ($users as $user) {
        if ($user['email'] === $email && password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user;
            header('Location: dashboard.php');
            exit;
        }
    }

    // Invalid login
    header('Location: login.php');
    exit;
}
?>
