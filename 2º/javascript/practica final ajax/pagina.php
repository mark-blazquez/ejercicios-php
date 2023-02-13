<!DOCTYPE >
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>OBTAINDATA</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<meta charset="utf-8">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/brands.js" integrity="sha384-sCI3dTBIJuqT6AwL++zH7qL8ZdKaHpxU43dDt9SyOzimtQ9eyRhkG3B7KMl6AO19" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
		<div class="container-fluid ">
			<img src="https://logodownload.org/wp-content/uploads/2014/10/youtube-logo-2-3.png" alt="" width="300" height="75" class="d-inline-block align-top">

			<div >
				<h1 class="navbar-brand c-light" href="#">OBTAINDATA</h1>
			  	<p class="nav-item">aplicacion desarrollada por mark blazquez</p>
			</div>
		</div>
	</nav>
	<div class="container">
		<?php
		//lo que hace este codigo es subir al servidor el archivo pasado por el formulario de la otra pagina y le cambia el nombre para que la llamada ajax actue siempre sobre lo mismo
			if (isset($_POST["acc"])){
				if ($_POST["acc"]=="envio"){
					move_uploaded_file($_FILES["archivosubido"]["tmp_name"],"documento.json");
					//$datos=print_r($_FILES);
					?>
					<div class="alert alert-danger" role="alert">
						el archivo se ha enviado correctamente! esta pagina se cerrara en 5segundos
					</div>
					<script>
						setTimeout(function(){
							window.close();
						},5000); //Dejara un tiempo de 5 seg para que el usuario vea que se envio el formulario correctamente
					</script>
					<?php
				}
			}
		?>
	</div>
</body>
