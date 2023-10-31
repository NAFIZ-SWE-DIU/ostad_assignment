<!-- register.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <form method="POST" action="register-process.php">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="submit" name="register" value="Register">
    </form>
</body>
</html>

<!-- register-process-->
<?php
session_start();
$usersFile = 'users.txt';

function readData($file) {
    if (file_exists($file)) {
        return unserialize(file_get_contents($file));
    }
    return [];
}

function writeData($file, $data) {
    file_put_contents($file, serialize($data));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $users = readData($usersFile);
    $newUser = [
        'username' => $username,
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT),
        'role' => 'user',
    ];
    $users[] = $newUser;
    writeData($usersFile, $users);

    header('Location: login.php');
    exit;
}
?>

