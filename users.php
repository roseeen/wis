<div>
    <h3>Manage Users</h3>

    <!-- Create User Form -->
    <form method="post" action="users_operations.php">
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <input type="submit" name="create_user" value="Create User">
    </form>

    <!-- View Users Table (Read) -->
    <?php include('users_operations.php'); ?>

    <!-- Update User Form -->
    <form method="post" action="users_operations.php">
        <h4>Update User</h4>
        <label for="user_id">User ID:</label>
        <input type="number" name="user_id" required>
        <label for="new_username">New Username:</label>
        <input type="text" name="new_username" required>
        <label for="new_email">New Email:</label>
        <input type="email" name="new_email" required>
        <input type="submit" name="update_user" value="Update User">
    </form>

    <!-- Delete User Form -->
    <form method="post" action="users_operations.php">
        <h4>Delete User</h4>
        <label for="user_id">User ID:</label>
        <input type="number" name="user_id" required>
        <input type="submit" name="delete_user" value="Delete User">
    </form>
</div>
