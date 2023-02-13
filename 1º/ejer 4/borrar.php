<!DOCTYPE html>
<html>
<head>
	<title>consulta</title>
	<link rel="stylesheet" type="text/css" href="./css/stilo.css">
</head>
<body>

	<?php  
		$id=$_POST["id"];

		/*sql local*/
		/*$dsn = 'mysql:dbname=libros;host=localhost';
		$usuario = 'root';
		$contrasena = "";*/
		/*base de datos del servidor */
		$dsn = 'mysql:dbname=id12543716_datos_personales;host=localhost';
		$usuario = 'id12543716_root';
		$contrasena = "olabase";

		try
		{
			$con = new PDO($dsn, $usuario, $contrasena);
			echo '<p>Conexion OK</br>';

			#borrar
			if (isset($id))
			{
				if (preg_match("/^[0-9]$/", $id))
				{
					$sentencia = $con->prepare("DELETE FROM libro WHERE id=:id");
					$rows = $sentencia->execute( array( ':id' => $id));
					if( $rows > 0 )
					{
						echo 'Borrado correcto</br>';
					}
				}
				else
				{
					echo "los datos no se han borrado</br> ";
				}	
			}
			else
			{
				echo "los datos no se han borrado</br> ";
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
