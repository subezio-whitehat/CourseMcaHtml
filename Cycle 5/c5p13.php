<!DOCTYPE html>
<html>
<head>
<style>
.error {
color: red ;
}
body {
background-color : lightblue;
color : navy;
}
</style>
</head>

<title<STUDENT REGISTRATION</title>
<body>

<?php
$id=$name=$branch=$mark="";
if(isset($_POST["submit"]))
{
if(empty($_POST["id"]))
{
$iderror="id required !";
}
elseif($_POST["id"]>100)
{
$iderror1="enter a value less than 100 !";
} 
else
{
$sid=$_POST["id"];
}
if(empty($_POST["name"]))
{
$nameerror="name field required !";
}
else
{
$name=$_POST["name"];
}
if(empty($_POST["branch"]))
{
$brancherror="branch required !";
}
else
{
$branch=$_POST["branch"];
}
if(empty($_POST["mark"]))
{
$markerror="enter your mark !";
}
elseif($_POST["mark"]>100)
{
$markerror1="enter a valid value !";
}
else
{
$mark=$_POST["mark"];
}
}
?>

<form method="POST" action="C5.13.php" >
<h1 style="text-align:center"><u>STUDENT REGISTRATION</u></h1>

<table align="center" border="2">
<tr>
	<td>STUDENT ID : </td>

	<td><input type="text" name="id"><span class="error">*<?php echo $iderror; echo $iderror1;?></span></td>
</tr>

<tr>
	<td>STUDENT NAME : </td>

	<td><input type="text" name="name"><span class="error">*<?php echo $nameerror; ?></span></td>
</tr>
<tr>
	<td>BRANCH : </td>

	<td><input type="text" name="branch"><span class="error">*<?php echo $brancherror; ?></span></td>
</tr>
<tr>
	<td>MARKS : </td>

	<td><input type="text" name="mark"><span class="error">*<?php echo $markerror;echo $markerror1; ?></span></td>
</tr>
<tr>
	<td colspan="2" style="text-align:center"><input type="submit" value="SUBMIT" name="submit">
</td>
</tr>
</table>
</form>


</body>
</html>