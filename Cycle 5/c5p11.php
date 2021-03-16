<html>
<head>
<title>Registration form</title>
</head>

<body align="center" bgcolor="coral">
<form method = "POST" action="">
Name :
<input type = "text" name = "name">
<br><br>
Roll no.:
<input type = "text" name = "rollno">
<br><br>
Gender :
<input type = "text" name = "gender">
<br><br>
Address :
<textarea name = "address" type = "textarea"></textarea>
<br><br>
<input type = "Submit" name = "insert" value = "Save">
<input type = "Reset" value = "Cancel">
</form>
</body>
</html>

<?php
if(isset($_POST['insert']))
{
$con = mysqli_connect("localhost","20mca020","2444","20mca020");
if($con)
{
echo "Mysql connection ok !<br>";

$name =$_POST['name'];
$rollno = $_POST['rollno'];
$gender =$_POST['gender'];
$address = $_POST['address'];
$insert = "INSERT INTO info(name, rollno, gender, address) VALUES ('$name','$rollno','$gender','$address')";
if(mysqli_query($con,$insert))
{
echo "Data inserted successfully !<br>";
}
$query = "SELECT `id`, `name`, `rollno`, `gender`, `address` FROM info";
$result = mysqli_query($con,$query);
echo
"<table border='1'>
<tr>
<th>Name</th>
<th>Roll No</th>
<th>Gender</th>
<th>Address</th>
</tr>";
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['rollno']."</td>";
echo "<td>".$row['gender']."</td>";
echo "<td>".$row['address']."</td>";
echo "</tr>";
}
echo "</table>";
}
mysqli_close($con);
 }
 }
?>