<html>
<head>
<title>CUSTOMER</title>
<head> 
<body>
<center>

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

$sql = "SELECT `cno`, `cname`, `item_purchased`, `mob_no` FROM `CUSTOMER`";
$result = mysqli_query($conn, $sql);
echo 
"<table border='1'>
<tr>
<th>CUSTOMER NO.</th>
<th>CUSTOMER NAME</th>
<th>ITEM PURCHASED</th>
<th>MOBILE NO.</th>
</tr>";

if (mysqli_num_rows($result) > 0) {
  // output data of each row
while($row = mysqli_fetch_assoc($result)) {
echo "<tr>";
echo "<td>".$row['cno']."</td>";
echo "<td>".$row['cname']."</td>";
echo "<td>".$row['item_purchased']."</td>";
echo "<td>".$row['mob_no']."</td>";
echo "</tr>";
  }
echo "</table>";
} 

mysqli_close($conn);
?>

</center>
</body>
</html>