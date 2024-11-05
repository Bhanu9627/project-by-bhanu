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

// Get the student ID from the form
$id = $_GET['id'];

// Search for the student in the database
$sql = "SELECT * FROM students WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch the row as an associative array
    $row = $result->fetch_assoc();
    echo "ID: " . $row["id"]. " - Name: " . $row["name"]. " - Course: " . $row["course"]. " - Mobile No: " . $row["mobile_no"]. "<br>";
} else {
    // Display an error message if no student is found
    echo "No student found with ID $id.";
}

// Close the connection
$conn->close();
?>
