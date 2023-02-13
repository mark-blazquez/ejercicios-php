<?php

	$nombre=$_POST["nombre"];
	$numero=$_POST["numero"];
	$opcion=$_POST["opcion"];
	$curso=$_POST["curso"];
	$matricula=$_POST["matricula"];

if ($matricula){
	if ($opcion=="pantalla")
	{
		echo "el nombre es $nombre su numero de telefono es $numero y esta matriculado en $curso ";
	}
	else
	{ 
		echo "se guardara en archivo";
	}
}
else
{
	echo "no estas matriculado";
}
?>