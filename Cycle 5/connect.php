<?php
$servername = "localhost";
$username = "20mca051";
$password = "2759";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"20mca051");

// Check connection
if (!$conn) {
  die("Connection failed : " .mysqli_connect_error());
}
echo "Connected successfully !!";
?>