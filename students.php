<!-- students.php -->
<div>
    <h3>Manage Students</h3>

    <!-- View Students Table (Read) -->
    <?php include('students_operations.php'); ?>

    <!-- Create Student Form -->
    <form method="post" action="students_operations.php">
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" required>
        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" required>
        <label for="birthdate">Birthdate:</label>
        <input type="date" name="birthdate" required>
        <label for="address">Address:</label>
        <input type="text" name="address">
        <label for="contact_number">Contact Number:</label>
        <input type="text" name="contact_number">
        <input type="submit" name="create_student" value="Create Student">
    </form>

    <!-- Update Student Form -->
    <form method="post" action="students_operations.php">
        <h4>Update Student</h4>
        <label for="student_id">Student ID:</label>
        <input type="number" name="student_id" required>
        <label for="new_first_name">New First Name:</label>
        <input type="text" name="new_first_name" required>
        <label for="new_last_name">New Last Name:</label>
        <input type="text" name="new_last_name" required>
        <label for="new_birthdate">New Birthdate:</label>
        <input type="date" name="new_birthdate" required>
        <label for="new_address">New Address:</label>
        <input type="text" name="new_address">
        <label for="new_contact_number">New Contact Number:</label>
        <input type="text" name="new_contact_number">
        <input type="submit" name="update_student" value="Update Student">
    </form>

    <!-- Delete Student Form -->
    <form method="post" action="students_operations.php">
        <h4>Delete Student</h4>
        <label for="student_id">Student ID:</label>
        <input type="number" name="student_id" required>
        <input type="submit" name="delete_student" value="Delete Student">
    </form>
</div>
