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

$sql = "SELECT `id`, `name`, `branch` FROM `STUDENT`";
$result = mysqli_query($conn, $sql);
echo 
"<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Branch</th>
</tr>";

if (mysqli_num_rows($result) > 0) {
  // output data of each row
while($row = mysqli_fetch_assoc($result)) {
echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['branch']."</td>";
echo "</tr>";
  }
echo "</table>";
} 

mysqli_close($conn);
?>