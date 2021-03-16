<!DOCTYPE html>
<html>
<head>
<style>
h2 {
color : green;
text-decoration : underline;
}
body {
background-color : linen;
}
</style>
</head>

<body>
<h2>STUDENT ARRAY</h2>
<?php
$sname=array("feby","zen","aloshy","ben","stephy","jeby","barol","cathy");
print_r($sname);

asort($sname);


echo "<h2>ASCENDING ORDER</h2>";
foreach($sname as $x)
   {
   echo  $x;
   echo "<br>";
   }

arsort($sname);

echo "<h2>DESCENDING ORDER</h2>";
foreach($sname as $y)
   {
   echo  $y;
   echo "<br>";
   }
?>

</body>
</html>