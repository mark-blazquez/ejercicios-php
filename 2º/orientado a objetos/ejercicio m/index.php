<?php
require_once "biblioteca.php";
require_once "socio.php";
require_once "fondo.php";
require_once "peliculas.php";
require_once "libros.php";
require_once "cds.php";

echo"</br>creamos una biblioteca ";
$granada1=new biblioteca("el sitio de las cosas pa alquilar","50");
echo"</br>nombre de la biblioteca ";
echo $granada1->getNombreSitio();
echo "</br>$granada1";
echo"</br>";

echo"</br>vamos a añadir un libro ";
$libro1=new libros("el quijote","comedia de aventuras");
echo"</br>el nombre del libro es ";
echo $libro1->getDimeNombre();
echo"</br>el tiempo que va a estar alquilado es ";
echo $libro1->getDimetiempo();
echo"</br>este es su genero ";
echo $libro1->getDimegenero();
echo "</br>$libro1";
echo"</br>añado autor ";
$libro1->setAñadirAutor("cervantes");
echo $libro1->getConsultarAutor();
echo"</br>hasta cuando puede estar alquilado? ";
echo $libro1->getTiempoPrestamo();
echo"</br></br>";

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

echo"</br>vamos a añadir un socio";
$socio1=new socio("pepe","3");
echo"</br>nombre de cliente ";
echo $socio1->getNombreCliente();
echo"</br>id de cliente ";
echo $socio1->getIdCliente();
echo"</br>";

echo"</br>vamos a añadir otro socio";
$socio2=new socio("paco","2");
echo"</br>nombre de cliente ";
echo $socio2->getNombreCliente();
echo"</br>id de cliente ";
echo $socio2->getIdCliente();
echo "</br>$socio2";
echo"</br>";

echo"</br>vamos a añadir a los usuario desde biblioteca";
$granada1->setAñadirCliente($socio1);
$granada1->setAñadirCliente($socio2);
echo"</br>nombre de los clientes desde biblioteca";
echo"</br>";
$granada1->getVerClientes();

echo"</br>";
echo"</br>vamos a añadir los fondos desde biblioteca";
$granada1->setAñadirFondo($libro1);
$granada1->setAñadirFondo($peli1);
echo"</br>visualizar fondos desde biblioteca";
echo"</br>";
$granada1->getVerFondos();





?>