<!DOCTYPE html>
<html>
<head>
	<title>consulta</title>
	<link rel="stylesheet" type="text/css" href="./css/stilo.css">
</head>
<body>

	<?php 
	
	//incluye la clase Libro y CrudLibro
	require_once('crud_libro.php');
	require_once('libro.php');
	
	$crud= new CrudLibro();
	$libro= new Libro();
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el libro
	if(isset($_POST['actualizar'])){
	$libro->setId($_POST['id']);
	$libro->setTitulo($_POST['titulo']);
	$libro->setAutor($_POST['autor']);
	$crud->actualizar($libro);
	echo"la actualizacion se ha realizado correctamente";}

	?>
	

	
	</br>
	<button style="text-align: center;"><a style="color: red;text-decoration: none;" class="but" href="index.html">volver al menu de consultas</a></button>
</body>
<footer>
	<h2>BIBLIOTECAS MARK BLAZQUEZ</h2>
</footer>
</html>