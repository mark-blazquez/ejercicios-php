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
		$crud=new CrudLibro();
		$libro= new Libro();
		//obtiene todos los libros con el método mostrar de la clase crud
		$listaLibros=$crud->mostrar();
	?>
	<?php foreach ($listaLibros as $libro) {?>
			
			<p>el libro con id '<?php echo  $libro->getId() ?>' titulado '<?php echo $libro->getTitulo() ?>' cuyo autor es '<?php echo  $libro->getAutor() ?>'.</p>

		
			<?php }?>
	<button style="text-align: center;"><a style="color: red;text-decoration: none;" class="but" href="index.html">volver al menu de consultas</a></button>		
</body>
<footer>
	<h2>BIBLIOTECAS MARK BLAZQUEZ</h2>
</footer>
</html>