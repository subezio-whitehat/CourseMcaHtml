<html>
<head></head>
<body>
<div align="center">
<h1 style="text-align:center"><u>Insert Data</u></h1>
<form method="post" action="sample.php" >
Name<input type="text" name="name"><br>
Branch<input type="text" name="branch"><br>
Mark<input type="text" name="mark"><br>


<input type="submit" value="submit" name="submit">
</form>
</div>
<div align="center">
<form method="post" action="sample.php">
<h1 style="text-align:center"><u>UPDATE DATA</u></h1>
<input type="text" name="search_id" >
<input type="submit" name="search" value="Search">
<input type="submit" name="view" value="view">
</form>
</div>
<?php
$con=mysqli_connect("localhost","20mca051","2759","20mca051");
if(isset($_POST["submit"]))
{
if($con)
{
echo $name=$_POST["name"];
echo $branch=$_POST["branch"];
echo $mark=$_POST["mark"];
$qry="INSERT INTO student(Name,Branch,Mark) VALUES ('$name','$branch','$mark')";

if(mysqli_query($con, $qry))
{
echo "Data inserted successfully<br>";
}
}
}
if(isset($_POST["search"]))
{
$id=$_POST["search_id"];
$qry="select*from student where Id='$id'";
$data=mysqli_query($con, $qry);
?>
<h1 style="text-align:center"><u>STUDENT DETAILS</u></h1>
<table align="center" border="1">
<tr>
<th>ID</th>
<th>Name</th>
<th>Branch</th>
<th>Mark</th>
</tr>
</tr>
<?php
$res=mysqli_fetch_array($data);
?>
<tr>
<td><?php echo $res['Id'];?></td>
<td><?php echo $res['Name'];?></td>
<td><?php echo $res['Branch'];?></td>
<td><?php echo $res['Mark'];?></td>
<td><a href="sample_update.php?sid=<?php echo $res['Id'];?>">Update</a></td>
<td><a href="sample_delete.php?sid=<?php echo $res['Id'];?>">Delete</a></td>
</tr>
</table>
<?php
}
if(isset($_POST["view"]))
{
$qry="select*from student";
$data=mysqli_query($con, $qry);
?>
<h1 style="text-align:center"><u>STUDENT DETAILS</u></h1>
<table align="center" border="1">
<tr>
<th>ID</th>
<th>Name</th>
<th>Branch</th>
<th>Mark</th>


</tr>
<?php
while($res=mysqli_fetch_array($data))
{
?>
<tr>
<td><?php echo $res['Id'];?></td>
<td><?php echo $res['Name'];?></td>
<td><?php echo $res['Branch'];?></td>
<td><?php echo $res['Mark'];?></td>


</tr>
<?php
}
}
?>
</table>
</body>
</html>
</body>
</html>
