<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
<style>
body{
background-color:#f2e6ff;
}
table { 
border-collapse: collapse;
width: 50%;
text-align: center
  
}
th,td {
padding: 10px;
}
th{
background-color:#b366ff;
}
tr:nth-child(even) {
background-color: #d9b3ff
}
</style>
</head>
<body>

<?php
$players = array( "Virat Kohli", "Shikhar Dhawan","Rohit Sharma","Rishabh Pant","K L Rahul","Jasprit Bumrah","Hardik Pandeya","Kedar Jadhav","Yuzvendra chahal","Dinesh Karthik","Ravichandran Ashwin","Bhuvneshwar Kumar","Ajinkya Rahane","Mohammad Shami");
?>
<h1 style="text-align:center"><u>INDIAN CRICKET PLAYERS</u></h1>
<table border=”1” align="center">
<tr>
	<th>SL.NO</th>
	<th>NAME OF PLAYERS</th>
</tr>

<?php
$arraysize=sizeof($players);
for($i=0;$i<$arraysize;$i++)
{
?>

<tr>
	<td><?php echo $i+1; ?></td>
	<td><?php echo $players[$i];?></td>
</tr>

<?php
}
?>
</table>

</body>
</html>