<?php
	/*conexion*/

	/*sql local*/
	/*$dsn = 'mysql:dbname=usuarios;host=localhost';
	$usuario = 'root';
	$contrasena = "";*/
					
	/*base de datos del servidor */
	$dsn ='mysql:dbname=id12543716_datos_personales;host=localhost';
	$usuario = 'id12543716_root';
	$contrasena = "olabase";
	$cuadroinicio=$_POST["inicio"];
	
		try{
			$con = new PDO($dsn, $usuario, $contrasena);
			$sql="SELECT * FROM datos1 where correo=:correo AND contraseña=:contr";
			$resultado=$con->prepare($sql);
			$correo=htmlentities(addslashes($_POST["correo"]));
			$contraseña=htmlentities(addslashes($_POST["contraseña"]));
			$resultado->bindValue(":correo", $correo);
			$resultado->bindValue(":contr", $contraseña);
			$resultado->execute();
			$numero_registro=$resultado->rowCount();
			if($numero_registro!=0){
				session_start();
				$_SESSION["usuario"]=$_POST["correo"];

				if(!isset($_SESSION["usuario"])){
					header("location:index.html");
				}
				else
				{
					$sql="SELECT nombre FROM datos1 where correo=:correo";
					$resultado=$con->prepare($sql);
					$correo=$_SESSION["usuario"];
					$resultado->bindValue(":correo", $correo);
					$resultado->execute();
					foreach($resultado as $nombre)
					{
						$nombre[0];

						$sql="SELECT correo,contraseña,nombre,apellido,codigo,direccion,movil FROM datos1 where correo=:correo";
						$resultado=$con->prepare($sql);
						$correo=$_SESSION["usuario"];
						$resultado->bindValue(":correo", $correo);
						$resultado->execute();
						foreach($resultado as $row){
							$row[0];
							$row[1];
							$row[2];
							$row[3];
							$row[4];
							$row[5];
							$row[6];
						}
					}	
				}
			}else{
				header("Location:indexmal.html");
				die();
			}
		}
		catch(PDOException $e){
			echo 'Fallo la conexion:'.$e->GetMessage();
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ejer1</title>
	<link rel="stylesheet" type="text/css" href="stilo.css">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body> 

<nav class="navbar bg-dark navbar-dark navbar-expand-sm d-flex">
	<h1 class="text-light mr-auto p-2">tiendas mark</h1>
	<div>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><a class="text-light" href="cierre.php">cerrar sesion</a></button> 
	</div>
</nav>
<div class="container ">
	<h3>Bienvenido <i><strong><?php echo"$nombre[0]";?></i></strong> a continuacion te presentamos tus datos:</br></h3>
	<div class="container d-flex justify-content-center">
			<div class=" container d-flex justify-content-center">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">correo</th>
							<th scope="col">contraseña</th>
							<th scope="col">nombre</th>
							<th scope="col">apellido</th>
							<th scope="col">codigo postal</th>
							<th scope="col">direccion</th>
							<th scope="col">movil</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><?php echo "$row[0]";?></td>
							<td><?php echo "$row[1]" ;?></td>
							<td><?php echo "$row[2]" ;?></td>
							<td><?php echo "$row[3]" ;?></td>
							<td><?php echo "$row[4]" ;?></td>
							<td><?php echo "$row[5]" ;?></td>
							<td><?php echo "$row[6]" ;?></td>
						</tr>
					</tbody>
				</table>
			</div>
	</div>
</div>
<footer class=" bg-dark fixed-bottom">
	  	<div class="d-flex justify-content-center ">
	  		<a href="https://www.facebook.com/"><img src="./img/face.png" alt="..." class="img-circle img-fluid" width="50px"></a>
	  		<a href="https://twitter.com/"><img src="./img/twiter.png" alt="..." class="img-circle img-fluid" width="100px"></a>
	  		<a href="https://www.linkedin.com/"><img src="./img/link.png" alt="..." class="img-circle img-fluid" width="50px"></a>
		</div>
		<div class="d-flex justify-content-center">
			<h3 class="text-light">@2020 Copyright</h3>
		</div>
</footer>

</body>
</html>

