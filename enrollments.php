<!-- enrollments.php -->
<div>
    <h3>Manage Enrollments</h3>

    <!-- Enroll Student Form -->
    <form method="post" action="enrollments_operations.php">
        <label for="student_id">Student ID:</label>
        <input type="number" name="student_id" required>
        <label for="course_id">Course ID:</label>
        <input type="number" name="course_id" required>
        <input type="submit" name="enroll_student" value="Enroll Student">
    </form>

    <!-- Update Enrollment Form -->
    <form method="post" action="enrollments_operations.php">
    <h4>Update Enrollment</h4>
    <label for="enrollment_id">Enrollment ID:</label>
    <input type="number" name="enrollment_id" required>

    <!-- Include fields for any other information you want to update -->
    <label for="new_student_id">New Student ID:</label>
    <input type="number" name="new_student_id" required>

    <label for="new_course_id">New Course ID:</label>
    <input type="number" name="new_course_id" required>

    <input type="submit" name="update_enrollment" value="Update Enrollment">
</form>


    <!-- Delete Enrollment Form -->
    <form method="post" action="enrollments_operations.php">
        <h4>Delete Enrollment</h4>
        <label for="enrollment_id">Enrollment ID:</label>
        <input type="number" name="enrollment_id" required>
        <input type="submit" name="delete_enrollment" value="Delete Enrollment">
    </form>

    <!-- View Enrollments Table (Read) -->
    <?php include('enrollments_operations.php'); ?>
</div>
