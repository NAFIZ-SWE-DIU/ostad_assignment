<!-- role-management.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Role Management</title>
</head>
<body>
    <h1>Role Management</h1>
    <?php if (isAdmin()): ?>
        <!-- Add, Edit, Delete Role Forms -->
        <form method="POST" action="role-management-process.php">
            <input type="text" name="newRole" placeholder="New Role">
            <input type="submit" name="addRole" value="Add Role">
        </form>
        <form method="POST" action="role-management-process.php">
            <input type="text" name="editRole" placeholder="Role to Edit">
            <input type="text" name="newRoleName" placeholder="New Role Name">
            <input type="submit" name="edit" value="Edit Role">
        </form>
        <form method="POST" action="role-management-process.php">
            <input type="text" name="deleteRole" placeholder="Role to Delete">
            <input type="submit" name="delete" value="Delete Role">
        </form>
    <?php else: ?>
        <p>You do not have permission to access this page.</p>
    <?php endif; ?>
    <a href="admin-dashboard.php">Back to Admin Dashboard</a>
</body>
</html>



<!-- role-management-process -->
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
