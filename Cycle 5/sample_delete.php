<html>
<head>DELETE</head>
<body>
<?php
session_start();
$_SESSION["studentId"] = $_GET['sid'];

$con=mysqli_connect("localhost","20mca051","2759","20mca051");
$id=$_SESSION["studentId"] ;
if($con)
{

$qry1="DELETE from student where Id=$id";
if(mysqli_query($con, $qry1))
{
echo "Data Removed<br>";
} 
}
?>
</body>
</html>
