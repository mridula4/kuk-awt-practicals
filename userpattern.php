<html>
<head>
<title>PHP Program To draw pattern</title>
</head>
<body>
<form method="get">
<input type="text" name="num1" value="" placeholder="Enter rows"/> 
<input type="submit" name="submit" value="Done"/>
</form>
<?php
$d = $_GET["num1"];
for ($i=1; $i<=$d; $i++)
{
for ($j=1; $j<=$i; $j++)
{
echo "*";
}
echo "<br/>";
}
?>
</body>
</html>
