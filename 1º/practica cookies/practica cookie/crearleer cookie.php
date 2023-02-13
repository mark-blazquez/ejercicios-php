<!DOCTYPE html>
<html>
<head>
	<title>ejer</title>
</head>
<body>
<?php

	#importo la clase con su metodo y atributos
	require "clasecookie.php";
	

	#creo nuevo objeto llamado cookieuno que pertenece a clase cookie y viene con los atributos de su clase
	$cookieuno = new cookie();


	#cambiar valores de sus atributos a la cookie
	$cookieuno->setName('cookieuno');
	$cookieuno->setValue("esto es la descripcion de la cookie");
	$cookieuno->setExpire(50);


	#obtener los parametros y guardarlos en forma de variables para  pasarselos a setcookie como valores 
	$nombre=$cookieuno->getName();
	echo "$nombre</br>";
	$info=$cookieuno->getValue();
	echo "$info</br>";
	$tiempo=$cookieuno->getExpire();
	echo "$tiempo</br>";

	#crear la cookie con las propiedades del objeto cookieuno
	setcookie("$nombre","$info",time()+($tiempo));

	echo "la cookie se acaba de crear y tienes $tiempo segundos  para comprobarlo en ejer comprobacion o en el enlace que te paso del host";

?>


</body>
</html>