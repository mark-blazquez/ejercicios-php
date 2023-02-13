<!DOCTYPE html>
<html>
<head>
	<title>consulta</title>
	<link rel="stylesheet" type="text/css" href="./css/stilo.css">
</head>
<body>

	<?php  
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
			#insercion 
			if(isset($titulo))
			{
				if (preg_match("/^(?=.{3,15}$)[A-ZÁÉÍÓÚ][a-zñáéíóú]+(?: [A-ZÁÉÍÓÚ][a-zñáéíóú]+)?$/", $titulo))
				{
					if (isset($autor))
					{
						if (preg_match("/^(?=.{3,15}$)[A-ZÁÉÍÓÚ][a-zñáéíóú]+(?: [A-ZÁÉÍÓÚ][a-zñáéíóú]+)?$/", $autor))
						{
					
							#insertar	
							$sentencia = $con->prepare("INSERT INTO libro(titulo,autor)VALUES(?,?)");
							$sentencia->bindParam(1, $titulo);
							$sentencia->bindParam(2, $autor);
							$sentencia->execute();
							echo "los datos se han insertado de forma correcta</br>";
						}
						else
						{
							echo "los datos no se han introducido</br> ";
						}
					}
					else
					{
						echo "los datos no se han introducido</br> ";
					}
				}
				else
				{
					echo "los datos no se han introducido</br> ";
				}
			}
			else
			{
				echo "los datos no se han introducido</br> ";
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