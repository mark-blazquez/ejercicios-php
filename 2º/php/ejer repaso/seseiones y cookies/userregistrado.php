<?php
		$correo=$_POST["correo"];
		$contra=$_POST["contra"];
		$nombre=$_POST["nombre"];
		

		/*$dsn = 'mysql:pruebasvagrant;host=localhost';
		$usuario = 'root';
		$contrasena = "ola";*/
		$dsn = 'mysql:supermercado;host=localhost:3306';
        $usuario = 'usuario';
        $contrasena = "Usuario@1111";
					
	


		if(isset($correo)){
			try{
				$con = new PDO($dsn, $usuario, $contrasena);
				/*insertar en la tabla */
				$sentencia = $con->prepare("INSERT INTO supermercado.prueba (correo,nombre,contra)VALUES(?,?,?)");
				$sentencia->bindParam(1, $correo);
				$sentencia->bindParam(2, $nombre);
				$sentencia->bindParam(3, $contra);
				$sentencia->execute();
				echo "<h1>tu usuario ha sido registardo correctamente pulsa el boton para dirigirte al inicio de sesion</h1>";
				?>
				<a href="./index.php"><input type="button" value="volver a inicio">
				<?php
			}
			catch(PDOException $e){
				echo 'Fallo la conexion:'.$e->GetMessage();
			}
		}else{
			header("location:pagerror.html");
		}
?>