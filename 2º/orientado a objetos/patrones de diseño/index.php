<?php
require_once "biblioteca.php";
require_once "socio.php";
require_once "fondo.php";
require_once "peliculas.php";
require_once "libros.php";
require_once "cds.php";
require_once "pruebas.php";

echo"</br>vamos a añadir una peli";
$peli1=new peliculas("furia de titanes","aventuras mitologica");
echo"</br>el nombre de la peli es ";
echo $peli1->getDimeNombre();
echo"</br>dia cuando se alquilo ";
echo $peli1->getDimetiempo();
echo"</br>este es su genero ";
echo $peli1->getDimegenero();
echo "</br>$peli1";
echo"</br>añado director ";
$peli1->setAñadirDirector("valfar");
echo $peli1->getConsultarDirector();
echo"</br>hasta cuando puede estar alquilado? ";
echo $peli1->getTiempoPrestamo();
echo"</br>";

echo"</br>";
echo"utilizando patrones de diseño";
echo"</br>";
$peli1continuacion=new decorator($peli1);
echo"</br> este seria con la forma decorator la obtencion de datos ".$peli1continuacion->getDatos();
echo"</br>";
echo $peli1->getObtenerNombre();






?>