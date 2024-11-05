<?php
// Database configuration
$host = "localhost";
$username = "root";
$password = "";
$dbname = "student_management";

// Create a connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$course = $_POST['course'];
$mobile_no = $_POST['mobile_no'];

// Insert student into the database
$sql = "INSERT INTO students (name, course, mobile_no) VALUES ('$name', '$course', '$mobile_no')";

if ($conn->query($sql) === TRUE) {
    echo "New student added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
