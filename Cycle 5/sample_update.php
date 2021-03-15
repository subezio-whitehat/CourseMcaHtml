<?php
session_start();
$con=mysqli_connect("localhost","20mca051","2759","20mca051");
?>

<html>
<head></head>
<title>Student Registration</title>
<body>
<?php
if(isset($_GET['sid']))
{
$_SESSION["studentId"] = $_GET['sid'];
$id=$_SESSION["studentId"] ;

$qry="select * from student where Id='$id'";
$res=mysqli_query($con,$qry);
$r=mysqli_fetch_array($res);
}
?>
<form method="POST" action="sample_update.php">
<h1 style="text-align:center"><u>UPDATE</u></h1>
<input type="hidden" name="id" value="<?php echo $id;?>">
<table align="center">
<tr>
<td>Student ID</td>
<td>:</td>
<td><input type="text" name="sid" disabled value="<?php echo $r['Id'];?>"></td></tr>
<tr>
<td>Name of Student</td>
<td>:</td>
<td><input type="text" name="name" value="<?php echo $r['Name'];?>"></td></tr>
<tr>
<td>Branch</td>
<td>:</td>
<td><input type="text" name="branch" value="<?php echo $r['Branch'];?>"></td></tr>
<td>Marks</td>
<td>:</td>
<td><input type="text" name="mark" value="<?php echo $r['Mark'];?>"></td></tr>
<tr>
<td colspan="2" style="text-align:right"><input type="submit" name ="update" value ="update"></td></tr>
</table>
</form>
<?php
if(isset($_POST["update"]))
{
	$stid=$_SESSION["studentId"];
	echo $_SESSION["studentId"];
	$sname=$_POST["name"];
	$branch=$_POST["branch"];
	$mark=$_POST["mark"];
	$qry1="update student set Name='$sname',Branch='$branch',Mark='$mark' where Id=$stid ";
	echo $qry1;
	if(mysqli_query($con,$qry1))
	{
		echo "Data updated successfully<br>";
	}
}
?>
</body>
</html>