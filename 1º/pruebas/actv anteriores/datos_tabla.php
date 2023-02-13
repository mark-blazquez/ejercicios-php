 <!DOCTYPE html>
<html>
<head>
	<title>relacion funciones </title>
</head>
<body>
<?php
	$num1=$_POST["numero"];
	for ($y=1;$y<=10;$y++)
	{
		$z=$num1*$y;
		echo"$num1*$y=$z<br/>";
	}
	
	echo "<a href='tabla.html'><button>volver</button></a>";

 ?>
</body>
</html>