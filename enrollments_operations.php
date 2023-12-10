<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "repato_sis";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["enroll_student"])) {
    $studentId = $_POST["student_id"];
    $courseId = $_POST["course_id"];

    $sql = "INSERT INTO Enrollment (student_id, course_id) VALUES ($studentId, $courseId)";

    if ($conn->query($sql) === TRUE) {
        echo "Student enrolled successfully.";
    } else {
        echo "Error enrolling student: " . $conn->error;
    }
}

// Read
$sql = "SELECT Enrollment.id, Student.first_name, Student.last_name, Course.course_name
        FROM Enrollment
        JOIN Student ON Enrollment.student_id = Student.id
        JOIN Course ON Enrollment.course_id = Course.id";
$result = $conn->query($sql);

if ($result) {
    if ($result->num_rows > 0) {
        echo "<table class='table'><thead><tr><th>ID</th><th>Student Name</th><th>Course Name</th><th>Action</th></tr></thead><tbody>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["first_name"] . " " . $row["last_name"] . "</td>
                    <td>" . $row["course_name"] . "</td>
                    <td>
                        <form method='post' action='enrollments_operations.php' style='display:inline;'>
                            <input type='hidden' name='enrollment_id' value='" . $row["id"] . "'>
                            <input type='submit' name='update_enrollment' value='Update'>
                        </form>
                        <form method='post' action='enrollments_operations.php' style='display:inline;'>
                            <input type='hidden' name='enrollment_id' value='" . $row["id"] . "'>
                            <input type='submit' name='delete_enrollment' value='Delete'>
                        </form>
                    </td>
                </tr>";
        }
        echo "</tbody></table>";
    } else {
        echo "0 results";
    }
} else {
    echo "Error fetching enrollments: " . $conn->error;
}

// Update
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update_enrollment"])) {
    $enrollmentId = $_POST["enrollment_id"];

    // Check if keys are set before using them
    $newStudentId = isset($_POST["new_student_id"]) ? $_POST["new_student_id"] : null;
    $newCourseId = isset($_POST["new_course_id"]) ? $_POST["new_course_id"] : null;

    // Check if the new student ID is provided
    if ($newStudentId !== null) {
        // Check if the new student ID exists in the Student table
        $checkStudentSql = "SELECT id FROM Student WHERE id = $newStudentId";

        // Execute the query
        $studentResult = $conn->query($checkStudentSql);

        // Check for errors in the query execution
        if (!$studentResult) {
            echo "Error checking student ID: " . $conn->error;
        } else {
            // Check if the new student ID exists
            if ($studentResult->num_rows > 0) {
                // The new student ID exists, proceed with the update
                $updateSql = "UPDATE Enrollment SET student_id = $newStudentId, course_id = $newCourseId WHERE id = $enrollmentId";

                // Execute the update query
                if ($conn->query($updateSql) === TRUE) {
                    echo "Enrollment updated successfully.";
                } else {
                    echo "Error updating enrollment: " . $conn->error;
                }
            } else {
                echo "Error: The provided new student ID does not exist.";
            }
        }
    } else {
        echo "Error: New student ID is not provided.";
    }
}





// Delete
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_enrollment"])) {
    $enrollmentId = $_POST["enrollment_id"];

    $deleteSql = "DELETE FROM Enrollment WHERE id = $enrollmentId";

    if ($conn->query($deleteSql) === TRUE) {
        echo "Enrollment deleted successfully.";
    } else {
        echo "Error deleting enrollment: " . $conn->error;
    }
}

$conn->close();
?>
