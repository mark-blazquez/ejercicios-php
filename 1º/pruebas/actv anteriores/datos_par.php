 <!DOCTYPE html>
<html>
<head>
	<title>relacion funciones </title>
</head>
<body>
<?php
	$num1=$_POST["numero"];
	$num2=2;
	if ($num1%$num2==0)
	{
		echo "el numero $num1 es par</br>";
	}
	else
	{
		echo"el numero $num1 es impar</br>";
	}
	echo "<a href='par.html'><button>volver</button></a>";

 ?>
</body>
</html>