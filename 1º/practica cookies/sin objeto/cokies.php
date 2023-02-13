<!DOCTYPE html>
<html>
<head>
	<title>ejer</title>
</head>
<body>
<?php

setcookie("cookie"/*name*/,"esto seria la informacion"/*value*/,time()+(365*24*60*60)/*expire*/,"dominio pegado de la pagina una vez colgada "/*expire*/);
echo "cookie creada";
/*para destruir cookies time()-1*/
/*las dos comillas es sobre el dominio de actuacion*/

?>
</body>
</html>