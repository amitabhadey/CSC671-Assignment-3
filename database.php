<?php
$conn = mysqli_connect("localhost", "root", "", "assignment_1");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>
