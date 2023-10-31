<!-- register-process.php -->
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
