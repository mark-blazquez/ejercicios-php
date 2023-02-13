<?php
	session_start();
    if(isset($_COOKIE["usuario"])){
		header("location:sesion.php");
    }
	#esto hace que si hay una cookie creada no puedas acceder al formulario de iniciar sesion y te direcciona a la pagina donde salewn tus datos 
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
<body >
	
	
		<div  class="d-flex justify-content-center">
			<img src="https://www.softzone.es/app/uploads-softzone.es/2016/03/Logo-de-Outlook-portada-930x452.jpg" class="img-fluid" alt="Responsive image">
		</div>

		<div class="d-flex justify-content-center">
			<form action="sesion.php" method="post">
				<div class="form-group">
					<label >correo </label>
					<input  type="email" class="form-control" name="correo" placeholder="introduce correo" required></br>
					<label >contraseña </label>
					<input type="password" class="form-control" name="contra" placeholder="introduce contraseña"required></br>
					<div class="form-check ">
						<input type="checkbox" class="form-check-input" name="mantenersesion">
						<label class="form-check-label" for="exampleCheck1">seguir conectado</label>
					</div>
					<input type="submit" class="btn btn-primary" value="iniciar sesion">
				</div>
			</form>
		</div>

		<div class="d-flex justify-content-center">
			<form action="userregistrado.php" method="POST">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
					registrarte
				</button>
				<div class="modal fade" id="exampleModal1" role="dialog" >
					<div class="modal-dialog" >
						<div class="modal-content">
							<div class="modal-header bg-primary text-light">
								<h5 class="modal-title bg-primary" id="exampleModalLabel1">registro de usuario</h5>
								<button type="button" class="close text-light" data-dismiss="modal">&times;</button>
							</div>
							<div class="modal-body">
									<div class="form-group">
										<label >correo </label>
										<input type="email" class="form-control"  placeholder="introduce tu correo" required="true" name="correo" required>
									</div>
									<div class="form-group">
										<label >contraseña</label>
										<input type="password" class="form-control" placeholder="introduce tu contraseña" required="true" name="contra" required>
									</div>
									<div class="form-group">
										<label >nombre</label>
										<input type="text" class="form-control" placeholder="introduce tu nombre" required="true" name="nombre" required>
									</div>
							</div>
							<div class="modal-footer">
								<input type="submit" class="btn btn-primary" value="registrar" name="registro">
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
</body>
</html>