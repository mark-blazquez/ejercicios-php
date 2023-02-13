<?php
	session_start();
	session_destroy();
	setcookie("usuario",serialize($guardar),time()-1);
	header("location:index.php");
?>
