<!-- login-process.php -->
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
