<!DOCTYPE html>
<html>
<head>
	<title>consulta</title>
	<link rel="stylesheet" type="text/css" href="./css/stilo.css">
</head>
<body>
	<?php  

		/*sql local*/
		$dsn = 'mysql:dbname=libros;host=localhost';
		$usuario = 'root';
		$contrasena = "";
		/*base de datos del servidor */
		/*$dsn = 'mysql:dbname=id12543716_datos_personales;host=localhost';
		$usuario = 'id12543716_root';
		$contrasena = "olabase";*/

		try
		{
			$con = new PDO($dsn, $usuario, $contrasena);
			echo '<p>Conexion OK</br>';

				#listar
				$sentencia = $con->query('SELECT id,titulo,autor FROM libro');
				
				if (!$sentencia) {
					print "<p>Error en la consulta.</p>";
				}
				else
				{ 
					foreach($sentencia as $row){
					echo "libro con id <i><strong>$row[0]</strong></i>" ;	
					echo " de titulo <i><strong>$row[1]</strong></i>" ;
					echo " escrito por <i><b>$row[2]</b></i>" . '<br/>';
					}
				}

		}
		catch(PDOException $e){
			echo 'Fallo la conexion:'.$e->GetMessage();
		}	
	?>
	<button style="text-align: center;"><a style="color: red;text-decoration: none;" class="but" href="index.html">volver al menu de consultas</a></button>		
</body>
<footer>
	<h2>BIBLIOTECAS MARK BLAZQUEZ</h2>
</footer>
</html>