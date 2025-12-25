<?php
$servername = "localhost";   // Usually localhost
$username = "root";          // Your DB username
$password = "Vibin@#123";              // Your DB password
$dbname = "javapro";     // Your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

// Close connection
mysqli_close($conn);
?>