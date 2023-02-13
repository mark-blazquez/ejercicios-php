programa de control de ahorros 
<?php 
require_once "huchas.php";
$hucha1= new Hucha("450");
echo"</br>estos son los dolarucos que tienes en tu hucha ";
$hucha1->verDinero($hucha1);
echo"</br>vamos a meter 100 dolarucos mas, ahora tendrias ";
$hucha1->meterDinero($hucha1,"100");
$hucha1->verDinero($hucha1);
echo"</br>vamos a sacar 200 dolarucos , ahora tendrias ";
$hucha1->sacarDinero($hucha1,"200");
$hucha1->verDinero($hucha1);
echo"</br>cuantas huchas tengo ";
$hucha1->contarHuchas();
$hucha2= new Hucha("850");
echo"</br>estos son los dolarucos que tienes en tu otra hucha ";
$hucha2->verDinero($hucha2);
echo"</br>cuantas huchas tengo ";
$hucha2->contarHuchas();

?>