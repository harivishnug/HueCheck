<?php
$servername = "localhost"; // Change this if your MySQL server is on a different host
$username = "root"; // MySQL username (default is "root" for XAMPP)
$password = ""; // MySQL password (default is empty for XAMPP)
$dbname = "hue_db"; // Name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

