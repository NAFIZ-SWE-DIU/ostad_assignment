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
