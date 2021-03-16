<!DOCTYPE html>
<head>
<style>

body {
background-color : linen;
color : 
}

</style>
</head>

<body>
<h1 style="text-align:center;color:green"><u>ELECTRICITY BILL CALCULATOR</u></h1>
<br><br>
<form method="POST" >
<div align="center">
<label><b>UNIT OF CONSUMPTION :</b></label>
<input type="number" name="unit" placeholder="Please enter no. of units">  
<br><br>          
<input type="submit" name="calculate" value="CALCULATE" style="background-color:green;color:white;" />	
</div>	
</form>
<?php
if(isset($_POST["calculate"]))
{
$unit=$_POST["unit"];
if($unit<=30)
{
$charge=$unit*2.50;
}
elseif($unit>=31 && $unit<=100)
{
$charge=$unit*3.70;
}
elseif($unit>=101 && $unit<=200)
{
$charge=$unit*4.85;
}
elseif($unit>=201 && $unit<=300)
{
$charge=$unit*5.85;
}
else
{
$charge=$unit*7.90;
}

?>

<h1 style="text-align:center;color:green"><u>ELECTRICITY BILL</u></h1>
<table align="center" border="0">
<tr>
<th>UNIT OF CONSUMPTION :</th>

<td><?php echo $unit; ?></td></tr>
<tr>
<th>TOTAL AMOUNT TO BE PAID (IN RS.) :</th>

<td><?php echo $charge; ?></td>
</tr>
</table>
<?php
}
?>

</body>
</html>