<?php
require_once "alumno.php";
require_once "profesor.php";
require_once "modulo.php";
require_once "curso.php";

echo"</br>a</br>";
$curso1=new curso();
$curso1->setNombre("2asir");
echo $curso1->getNombre();

echo"</br>b</br>";
$profe1=new profesor("susana","lopez","55555555k");
$curso1->setTutor($profe1);

echo"</br>c</br>";
$modulo1=new modulo();
$modulo1->setNombre("seguridad");
$modulo1->setNumHoras("4");
$modulo2=new modulo();
$modulo2->setNombre("servicios");
$modulo2->setNumHoras("6");
$modulo3=new modulo();
$modulo3->setNombre("iaw");
$modulo3->setNumHoras("8");

echo"</br>d</br>";
$profe1->setAñadirModulo($modulo1);
$profe2=new profesor("jose","gomez","44444444");
$profe2->setAñadirModulo($modulo2);
$profe3=new profesor("cristina","ascaso","66666666r");
$profe3->setAñadirModulo($modulo3);

echo"</br>e</br>";
$alum1=new alumno("mark","blazquez","77777777R");
$alum1->setAñadirModulo($modulo1);
$alum1->setAñadirModulo($modulo2);
$alum1->setAñadirModulo($modulo3);
echo $alum1->getVerModulos();
$alum2=new alumno("pepe","gomez","88888888z");
$alum2->setAñadirModulo($modulo1);
$alum2->setAñadirModulo($modulo2);
$alum2->setAñadirModulo($modulo3);
$alum3=new alumno("pepa","lopez","99999999y");
$alum3->setAñadirModulo($modulo1);
$alum3->setAñadirModulo($modulo2);
$alum3->setAñadirModulo($modulo3);
echo"</br>f</br>";
echo"</br>g</br>";
echo"</br>h</br>";
echo"</br>i</br>";
echo"</br>j</br>";



?>