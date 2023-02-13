<!DOCTYPE html>
<html>
<head>
	<title>vehiculosclasicos</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="./css1/stilo1.css">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./css/animate.css">
	<link rel="shortcut icon" type="image/ico" href="./img1/logo.ico"/>
	<style>
		@import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');
		@import url('https://fonts.googleapis.com/css?family=Odibee+Sans&display=swap');
		@import url('https://fonts.googleapis.com/css?family=Sriracha&display=swap');
		@import url('https://fonts.googleapis.com/css?family=Lemonada&display=swap');
	</style>
</head>
<body>
	<header>
		<div class="cabecera">
			<div class="foto">
				<img class="logo" src="./img1/logo.jfif">
			</div>
			<div class="menu">
				<a href="index.html"><h1>CLASSIC CAR</h1></a> 
				<div class="icon"><i class="fa fa-bars"></i></div>
				<a class="rojo" ><h2 href="japoneses.html">Japoneses</h2></a>
				<a class="rojo" href="americanos.html"><h2>Americanos</h2></a>
				<a class="rojo"><h2 >Contacto</h2></a>
			</div>
			</div>
		</div>
	</header>
		<div class="tabla">
			<h1>COMPRUEBA TUS DATOS </h1>
			<table style="margin: 0 auto;text-align: center;padding: 2px;">
				<tr><p>
					<td><p>nombre</p></td>
					<td><p>apellido</p></td>
					<td><p>telefono</p></td>
					<td><p>email</p></td>
					<td><p>contraseña</p></td>
					<td><p>dni</p></td>
					<td><p>direccion</p></td>
					<td><p>provincia</p></td>
					<td><p>codigo postal</p></td>
					<td><p>localidad</p></td>
					<td><p>fecha de nacimiento</p></td>
					<td><p>estado civil</p></td>				
				</tr>
				<tr>
				<?php
					$nombre=$_POST["nombre"];
					$apellido=$_POST["apellido"];
					$telefono=$_POST["telefono"];
					$email=$_POST["email"];
					$contraseña=$_POST["contraseña"];
					$dni=$_POST["dni"];
					$direccion=$_POST["direccion"];
					$provincia=$_POST["provincia"];
					$codigo=$_POST["codigo"];
					$localidad=$_POST["localidad"];
					$opcion=$_POST["opcion"];
					$fecha=$_POST["fecha"];

				

					if (isset($nombre))
					{						
						if (preg_match("/^(?=.{3,15}$)[A-ZÁÉÍÓÚ][a-zñáéíóú]+(?: [A-ZÁÉÍÓÚ][a-zñáéíóú]+)?$/", $nombre))
						{
							echo"<td><p>$nombre</p></td>";
						}
						else{
							echo "<td><p>el nombre no es correcto</p></td>";
							$nombre=false;
						}
					}							
					else{
						
						echo"<td><p>el nombre no es correcto</p></td>";
					}
					if (isset($apellido))
					{
						if (preg_match("/^(?=.{3,15}$)[A-ZÁÉÍÓÚ][a-zñáéíóú]+(?: [A-ZÁÉÍÓÚ][a-zñáéíóú]+)?$/", $apellido))
							{
								echo "<td><p>$apellido</p></td>";
							}
						else{
							echo"<td><p>el apellido no es correcto</p></td>";
							$apellido=false;
						}
					}						
					else
					{
						echo"<td><p>el apellido no es correcto</p></td>";
					}
					if (isset($telefono))
					{
						if (preg_match("/^[0-9]{9}$/", $telefono))
							{
								echo "<td><p>$telefono</p></td>";
							}else{
								echo"<td><p>el numero de telefono no es valido</p></td>";
								$numero=false;
							}
					}						
					else
					{
						echo"<td><p>el numero de telefono no es correcto</p></td>";
					}
					if (isset($email))
					{
						if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $email))
							{
								echo "<td><p>$email</p></td>";
							}else{
								echo"<td><p>el correo no es valido</p></td>";
								$email=false;
							}
					}						
					else
					{
						echo"<td><p>el correo no es correcto</p></td>";
					}
					

					if (isset($contraseña))
					{
						if (preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){8,15}$/", $contraseña))
							{
								echo "<td><p>$contraseña</p></td>";
							}else{
								echo"<td><p>la contraseña no es segura </p></td>";
								$contraseña=false;
							}
					}						
					else
					{
						echo"<td><p>la contraseña no es segura </p></td>";
					}
					

					if (isset($dni)) 
					{
						if (preg_match("/^[0-9]{8}/", $dni)){

							function LetraNIF ($dni)
							{
								$valor= (int) ($dni / 23);
								$valor *= 23;
								$valor= $dni - $valor;
								$letras= "TRWAGMYFPDXBNJZSQVHLCKEO";
								$letraNif= substr ($letras, $valor, 1);
								return $letraNif;
							}
						$letra=LetraNIF($dni);
						echo "<td><p>$dni<b>$letra</b></p></td>";
						}
						else
						{
						echo "<td><p>el dni introducido no es valido</p></td>";
						$dni=false;
						}
					} 
										
					else{
						echo "<td><p>el dni introducido no es valido</p></td>"; 
					}

					if (isset($direccion))
					{
						if (preg_match("/^(?=.{3,15}$)[A-ZÁÉÍÓÚ][a-zñáéíóú]+(?: [A-ZÁÉÍÓÚ][a-zñáéíóú]+)?$/", $direccion))
							{
								echo"<td><p>$direccion</p></td>";
								
							}
						else
						{
						echo"<td><p>la direccion no es correcta</p></td>";
						$direccion=false;
						}
					}						
					else
					{
						echo"<td><p>la direccion no es correcta</p></td>";
						
					}

					


					if (isset($provincia))
					{
						if (preg_match("/^(?=.{3,15}$)[A-ZÁÉÍÓÚ][a-zñáéíóú]+(?: [A-ZÁÉÍÓÚ][a-zñáéíóú]+)?$/", $provincia))
							{
								echo"<td><p>$provincia</p></td>";
							}else{
					
						echo"<td><p>la provincia no es correcta</p></td>";
						$provincia=false;}
					}						
					else
					{
						echo"<td><p>la provincia no es correcta</p></td>";
					}

					if (isset($codigo))
					{
						if (preg_match("/^(?:0[1-9]\d{3}|[1-4]\d{4}|5[0-2]\d{3})$/", $codigo))
						{
							echo "<td><p>$codigo</p></td>";
						}else{
					
						echo"<td><p>el codigo postal no es correcto</p></td>";
						$codigo=false;}
					}						
					else
					{
						echo"<td><p>el codigo postal no es correcto</p></td>";
					}
					
					if (isset($localidad))
					{
						if (preg_match("/^(?=.{2,15}$)[A-ZÁÉÍÓÚ][a-zñáéíóú]+(?: [A-ZÁÉÍÓÚ][a-zñáéíóú]+)?$/", $localidad))
							{
								echo"<td><p>$localidad</p></td>";
							}else{
					
                        echo"<td><p>la localidad no es correcta</p></td>";
                        $localidad=false;}
					
					}						
					else
					{
						echo"<td><p>la localidad no es correcta</p></td>";
					}
					

					if (isset($fecha))
					{
						if (preg_match("/^([0-2][0-9]|(3)[0-1])(\/)(((0)[0-9])|((1)[0-2]))(\/)\d{4}$/i", $fecha))
						{
							echo"<td><p>$fecha</p></td>";
						}else{
					
                        echo"<td><p>la fecha no es correcta</p></td>";
                        $fecha=false;}																		
					}						
					else
					{
						echo"<td><p>la fecha no es correcta</p></td>";
                    }
                    					
					if (isset($opcion)){
						if ($opcion=='estado civil') {
							echo "<td><p>introduce tu estado civil</p></td>";
							$opcion=false;
						}
						else{
							echo "<td><p>$opcion</p></td>";
						}
					}
					else{
						echo"<td><p>introduce tu estado civil</p></td>";
					}
					
					/*conexion*/
					/*sql local*/
					/*$dsn = 'mysql:dbname=dfatos_personales;host=localhost';
					$usuario = 'root';
					$contrasena = "";*/
					
					/*base de datos del servidor */
					$dsn = 'mysql:dbname=id12543716_datos_personales;host=localhost';
					$usuario = 'id12543716_root';
					$contrasena = "olabase";

					try{
					$con = new PDO($dsn, $usuario, $contrasena);
					echo '<p>Conexion OK</br>';
					 
					/*funcion de comprobacion de los datos que sean true */
					if ($dni==true){
						if ($nombre==true){
							if ($apellido==true){
								if ($telefono==true){
									if ($email==true){
										if ($contraseña==true){
											if ($direccion==true){
												if ($provincia==true){
													if ($codigo==true){
														if ($localidad==true){
															if ($fecha==true){
																if ($opcion==true){
																	/*insertar en la tabla */
																	$sentencia = $con->prepare("INSERT INTO datos(dni,nombre,apellido,telefono,email,contraseña,direccion,provincia,codigo,localidad,fecha,estadocivil)VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");																	
																	$sentencia->bindParam(1, $dni);
																	$sentencia->bindParam(2, $nombre);
																	$sentencia->bindParam(3, $apellido);
																	$sentencia->bindParam(4, $telefono);
																	$sentencia->bindParam(5, $email);
																	$sentencia->bindParam(6, $contraseña);
																	$sentencia->bindParam(7, $direccion);
																	$sentencia->bindParam(8, $provincia);
																	$sentencia->bindParam(9, $codigo);
																	$sentencia->bindParam(10, $localidad);
																	$sentencia->bindParam(11, $fecha);
																	$sentencia->bindParam(12, $opcion);
																	$sentencia->execute(); 				
																}
																else
																{
																	echo "los datos no son correctos";
																}
															}else
															{
																echo "los datos no son correctos";
															}
														}else
														{
															echo "los datos no son correctos";
														}
													}else
													{
														echo "los datos no son correctos";
													}
												}else
												{
													echo "los datos no son correctos";
												}
											}else
											{
												echo "los datos no son correctos";
											}
										}else
										{
											echo "los datos no son correctos";
										}
									}else
									{
										echo "los datos no son correctos";
									}
								}else
								{
									echo "los datos no son correctos";
								}
							}else
							{
								echo "los datos no son correctos";
							}
						}else
						{
							echo "los datos no son correctos";
						}
					}else
					{
						echo "los datos no son correctos";
					}
									
					}catch(PDOException $e){
						echo 'Fallo la conexion:'.$e->GetMessage();
					}
				?>
				</tr>
			</table>
			<button style="background-color: black; " type="button"><a href="contacto.html">VOLVER A LA PAGINA DE CONTACTO</a></button>
				
			
		</div>
	<footer>
		<div class="redes">
			<h3>Nuestras redes sociales</h3>
			<a href="https://www.facebook.com/usuario "target="_blank" class="fa fa-facebook-square"></a>
	 		<a href="https://twitter.com/usuario" target="_blank" class="fa fa-twitter-square"></a>
	 		<a href="https://plus.google.com/usuario" target="_blank" class="fa fa-google-plus-square"></a>
		</div>
		<div class="avisos">
			<li><a href="">AVISOS LEGALES</a></li> 
			<li><a href="">POLÍTICA DE COOKIES</a></li>
			<li><a href="">POLÍTICA DE PRIVACIDAD</a></li>
			<li><a href="">AVISO LEGAL</a></li>
		</div>
	</footer>
</body>
</html>