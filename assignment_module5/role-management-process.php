<!-- role-management-process.php -->
<?php
session_start();
$usersFile = 'users.txt';
$rolesFile = 'roles.txt';

function readData($file) {
    if (file_exists($file)) {
        return unserialize(file_get_contents($file));
    }
    return [];
}

function writeData($file, $data) {
    file_put_contents($file, serialize($data));
}

function isAdmin() {
    return isset($_SESSION['user']) && $_SESSION['user']['role'] === 'admin';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['addRole'])) {
        $newRole = $_POST['newRole'];
        if (isAdmin()) {
            $roles = readData($rolesFile);
            $roles[] = $newRole;
            writeData($rolesFile, $roles);
        }
    } elseif (isset($_POST['edit'])) {
        $roleToEdit = $_POST['editRole'];
        $newRoleName = $_POST['newRoleName'];
        if (isAdmin()) {
            $users = readData($usersFile);
            foreach ($users as &$user) {
                if ($user['role'] === $roleToEdit) {
                    $user['role'] = $newRoleName;
                }
            }
            writeData($usersFile, $users);
        }
    } elseif (isset($_POST['delete'])) {
        $roleToDelete = $_POST['deleteRole'];
        if (isAdmin()) {
            $roles = readData($rolesFile);
            $roles = array_diff($roles, [$roleToDelete]);
            writeData($rolesFile, $roles);
        }
    }
}
header('Location: role-management.php');
exit;
?>
