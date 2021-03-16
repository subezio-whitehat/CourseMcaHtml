<?php
$servername = "localhost";
$username = "20mca020";
$password = "2444";
$dbname = "20mca020";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE STUDENT SET mark='90' WHERE id=2";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully !";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>