<!DOCTYPE html>
<html>
<head>
	<title>ejer</title>
</head>
<body>
<?php
	#metodo normal
	if (isset($_COOKIE["cookieuno"]))
	{
		echo "esto ha funcionado la cookie esta creada</br>";
	}
	else
	{
		echo "la cookie no existe</br>";
	}
?>
</body>
</html>