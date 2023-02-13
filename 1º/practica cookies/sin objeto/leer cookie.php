<!DOCTYPE html>
<html>
<head>
	<title>ejer</title>
</head>
<body>
<?php

if (isset($_COOKIE[/*este es el nombre de la cookie concreta*/"cookie"]))
{
	echo ($_COOKIE["cookie"]);
}
else
{
	echo "la cookie no esxiste";
}
  
?>
</body>
</html>