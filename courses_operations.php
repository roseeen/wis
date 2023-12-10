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
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["create_course"])) {
    $courseName = $_POST["course_name"];
    $description = $_POST["description"];

    $sql = "INSERT INTO Course (course_name, description) 
            VALUES ('$courseName', '$description')";

    if ($conn->query($sql) === TRUE) {
        echo "Course created successfully.";
    } else {
        echo "Error creating course: " . $conn->error;
    }
}

// Read
$sql = "SELECT * FROM Course";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='table'><thead><tr><th>ID</th><th>Course Name</th><th>Description</th></tr></thead><tbody>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["course_name"] . "</td><td>" . $row["description"] . "</td></tr>";
    }
    echo "</tbody></table>";
} else {
    echo "0 results";
}

// Update
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update_course"])) {
    $id = $_POST["course_id"];
    $newCourseName = $_POST["new_course_name"];
    $newDescription = $_POST["new_description"];

    $sql = "UPDATE Course SET course_name='$newCourseName', 
            description='$newDescription' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Course updated successfully.";
    } else {
        echo "Error updating course: " . $conn->error;
    }
}

// Delete
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_course"])) {
    $id = $_POST["course_id"];

    $sql = "DELETE FROM Course WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Course deleted successfully.";
    } else {
        echo "Error deleting course: " . $conn->error;
    }
}

$conn->close();
?>
