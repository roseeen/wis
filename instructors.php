<div>
    <h3>Manage Instructors</h3>

    <!-- Create Instructor Form -->
    <form method="post" action="instructors_operations.php">
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" required>
        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" required>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <input type="submit" name="create_instructor" value="Create Instructor">
    </form>

    <!-- View Instructors Table (Read) -->
    <?php include('instructors_operations.php'); ?>

    <!-- Update Instructor Form -->
    <form method="post" action="instructors_operations.php">
        <h4>Update Instructor</h4>
        <label for="instructor_id">Instructor ID:</label>
        <input type="number" name="instructor_id" required>
        <label for="new_first_name">New First Name:</label>
        <input type="text" name="new_first_name" required>
        <label for="new_last_name">New Last Name:</label>
        <input type="text" name="new_last_name" required>
        <label for="new_email">New Email:</label>
        <input type="email" name="new_email" required>
        <input type="submit" name="update_instructor" value="Update Instructor">
    </form>

    <!-- Delete Instructor Form -->
    <form method="post" action="instructors_operations.php">
        <h4>Delete Instructor</h4>
        <label for="instructor_id">Instructor ID:</label>
        <input type="number" name="instructor_id" required>
        <input type="submit" name="delete_instructor" value="Delete Instructor">
    </form>
</div>