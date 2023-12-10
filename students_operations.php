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
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["create_student"])) {
    $firstName = $_POST["first_name"];
    $lastName = $_POST["last_name"];
    $birthdate = $_POST["birthdate"];
    $address = $_POST["address"];
    $contactNumber = $_POST["contact_number"];

    $sql = "INSERT INTO Student (first_name, last_name, birthdate, address, contact_number) 
            VALUES ('$firstName', '$lastName', '$birthdate', '$address', '$contactNumber')";

    if ($conn->query($sql) === TRUE) {
        echo "Student created successfully.";
    } else {
        echo "Error creating student: " . $conn->error;
    }
}

// Read
$sql = "SELECT * FROM Student";
$result = $conn->query($sql);

if ($result === FALSE) {
    echo "Error reading data: " . $conn->error;
} else {
    if ($result->num_rows > 0) {
        echo "<table class='table'><thead><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Birthdate</th><th>Address</th><th>Contact Number</th></tr></thead><tbody>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["first_name"] . "</td><td>" . $row["last_name"] . "</td><td>" . $row["birthdate"] . "</td><td>" . $row["address"] . "</td><td>" . $row["contact_number"] . "</td></tr>";
        }
        echo "</tbody></table>";
    } else {
        echo "0 results";
    }
}


// Update
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update_student"])) {
    $id = $_POST["student_id"];
    $newFirstName = $_POST["new_first_name"];
    $newLastName = $_POST["new_last_name"];
    $newBirthdate = $_POST["new_birthdate"];
    $newAddress = $_POST["new_address"];
    $newContactNumber = $_POST["new_contact_number"];

    $sql = "UPDATE Student SET first_name='$newFirstName', last_name='$newLastName', 
            birthdate='$newBirthdate', address='$newAddress', contact_number='$newContactNumber' 
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Student updated successfully.";
    } else {
        echo "Error updating student: " . $conn->error;
    }
}

// Delete
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_student"])) {
    $id = $_POST["student_id"];

    $sql = "DELETE FROM Student WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Student deleted successfully.";
    } else {
        echo "Error deleting student: " . $conn->error;
    }
}

$conn->close();
?>
