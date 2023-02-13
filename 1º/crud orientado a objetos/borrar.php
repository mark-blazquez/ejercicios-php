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
		$id=$_POST['id'];


		$crud= new CrudLibro();
		$libro= new Libro();
		$id=$_POST["id"];
		// si el elemento id no viene nulo llama al crud y elimina un libro
		if (isset($_POST['borrar'])) {
			//llama a la función eliminar definida en el crud
			$libro->setId($_POST['id']);
			$crud->eliminar($libro);
		}
		else{
			echo"no hay ningun elemento definido";
		}	
	?>
	<button style="text-align: center;"><a style="color: red;text-decoration: none;" class="but" href="index.html">volver al menu de consultas</a></button>
</body>
<footer>
	<h2>BIBLIOTECAS MARK BLAZQUEZ</h2>
</footer>
</html>		
