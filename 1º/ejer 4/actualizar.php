<!DOCTYPE html>
<html>
<head>
	<title>consulta</title>
	<link rel="stylesheet" type="text/css" href="./css/stilo.css">
</head>
<body>

	<?php 
		$id=$_POST["id"]; 
		$titulo=$_POST["titulo"];
		$autor=$_POST["autor"];


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

			#actualizar
			if(isset($id))
			{
				if (preg_match("/^[0-9]$/", $id))
				{
				
					if(isset($titulo))
					{
						if (preg_match("/^(?=.{3,15}$)[A-ZÁÉÍÓÚ][a-zñáéíóú]+(?: [A-ZÁÉÍÓÚ][a-zñáéíóú]+)?$/", $titulo))
						{
							if (isset($autor))
							{
								if (preg_match("/^(?=.{3,15}$)[A-ZÁÉÍÓÚ][a-zñáéíóú]+(?: [A-ZÁÉÍÓÚ][a-zñáéíóú]+)?$/", $autor))
								{
									$senetencia = $con->prepare('UPDATE libro SET titulo = :titulo, autor = :autor WHERE id = :id');
									$rows = $senetencia->execute( array( ':id' => $id, ':titulo' => $titulo, ':autor' => $autor));
									if( $rows > 0 ){
										echo 'Actualización correcta</br>';
									}
								}
								else
								{
									echo "los datos no se han actualizado</br> ";
								}
							}
							else
							{
								echo "los datos no se han actualizado</br> ";
							}
						}
						else
						{
							echo "los datos no se han actualizado</br> ";
						}
					}
					else
					{
						echo "los datos no se han actualizado</br> ";
				
					}
				}
				else
				{
					echo "los datos no se han actualizado</br> ";
				
				}
			}
			else
			{
				echo "los datos no se han actualizado</br> ";
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