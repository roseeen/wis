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
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["create_instructor"])) {
    $firstName = $_POST["first_name"];
    $lastName = $_POST["last_name"];
    $email = $_POST["email"];

    $sql = "INSERT INTO Instructor (first_name, last_name, email) 
            VALUES ('$firstName', '$lastName', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Instructor created successfully.";
    } else {
        echo "Error creating instructor: " . $conn->error;
    }
}

// Read
$sql = "SELECT * FROM Instructor";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='table'><thead><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th></tr></thead><tbody>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["first_name"] . "</td><td>" . $row["last_name"] . "</td><td>" . $row["email"] . "</td></tr>";
    }
    echo "</tbody></table>";
} else {
    echo "0 results";
}

// Update
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update_instructor"])) {
    $id = $_POST["instructor_id"];
    $newFirstName = $_POST["new_first_name"];
    $newLastName = $_POST["new_last_name"];
    $newEmail = $_POST["new_email"];

    $sql = "UPDATE Instructor SET first_name='$newFirstName', last_name='$newLastName', 
            email='$newEmail' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Instructor updated successfully.";
    } else {
        echo "Error updating instructor: " . $conn->error;
    }
}

// Delete
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_instructor"])) {
    $id = $_POST["instructor_id"];

    $sql = "DELETE FROM Instructor WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Instructor deleted successfully.";
    } else {
        echo "Error deleting instructor: " . $conn->error;
    }
}

$conn->close();
?>
