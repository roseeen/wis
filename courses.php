<div>
    <h3>Manage Courses</h3>

    <!-- Create Course Form -->
    <form method="post" action="courses_operations.php">
        <label for="course_name">Course Name:</label>
        <input type="text" name="course_name" required>
        <label for="description">Description:</label>
        <textarea name="description" rows="4" required></textarea>
        <input type="submit" name="create_course" value="Create Course">
    </form>

    <!-- View Courses Table (Read) -->
    <?php include('courses_operations.php'); ?>

    <!-- Update Course Form -->
    <form method="post" action="courses_operations.php">
        <h4>Update Course</h4>
        <label for="course_id">Course ID:</label>
        <input type="number" name="course_id" required>
        <label for="new_course_name">New Course Name:</label>
        <input type="text" name="new_course_name" required>
        <label for="new_description">New Description:</label>
        <textarea name="new_description" rows="4" required></textarea>
        <input type="submit" name="update_course" value="Update Course">
    </form>

    <!-- Delete Course Form -->
    <form method="post" action="courses_operations.php">
        <h4>Delete Course</h4>
        <label for="course_id">Course ID:</label>
        <input type="number" name="course_id" required>
        <input type="submit" name="delete_course" value="Delete Course">
    </form>
</div>
