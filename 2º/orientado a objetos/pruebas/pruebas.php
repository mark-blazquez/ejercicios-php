<?php
require "clases.php";
$persona=new Persona("pepe");
#echo $persona;


$numero1=new operacion("365");
$numero2=new operacion("364");
$resultado=new operacion("");
/*
$numero1->imprimir($numero1);
$numero2->imprimir($numero2);
/* metodo to string
echo "</br>$numero2";
echo "</br>$numero2";
*/

$resultado->Suma($numero1,$numero2);
$resultado->imprimir($resultado);

/**/
?>