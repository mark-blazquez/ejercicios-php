<!DOCTYPE html>
<html>
<head>
	<title>relacion asignacion</title>
</head>
<body>
<?php
	print "<h1>ejer1</h1>";
	$salario=1000;
	$impuesto=($salario*20)/100;
	$sueldo=$salario-$impuesto; 
	echo "$sueldo";

	print "<h1>ejer2</h1>";
	$b=5;
	$h=5;
	$areas=($b*$h)/2;
	echo "$areas";

	print "<h1>ejer3</h1>";
	$num1=33;
	$num2=2;
	$suma=$num1+$num2;
	echo "$suma<br/>";
	$resta=$num1-$num2;
	echo "$resta<br/>";
	$multi=$num1*$num2;
	echo "$multi<br/>";
	$divi=$num1/$num2;
	echo "$divi<br/>";
	$resto=$num1%$num2;
	echo "$resto<br/>";

	print"<h1>ejer4</h1>";
	if ($num1%$num2==0)
	{
		print"el numero es par";
	}
	else
	{
		print"el numero es impar";
	}
	print"<h1>ejer5</h1>";
	if($num1>$num2)
	{
		print"el $num1 es mayor que $num2";
	}
	else{
		print "el $num1 es menor que $num2 ";
	}

	print"<h1>ejer5</h1>";
	$numero=5;
	switch($numero){
		case 1  :
		echo("el dia es lunes");
        	break;
	    case "2":
	        echo("el dia es martes");
	        break;
	    case "3":
	        echo("el dia es miercoles");
	        break;
	    case "4":
	        echo("el dia es jueves");
	        break;
	    case "5":
	        echo("el dia es viernes");
	    	break;
	    case "6":
	        echo("el dia es sabado");
	    	break;
	    case "7":
	        echo("el dia es domingo");
	    	break;
	}   
	 
	print"<h1>ejer7</h1>";
	$num=rand(1,100);
	echo"$num<br/>";
	$nume=50;
	if($num>$nume)
	{
		print"el $num es mayor que $nume";
	}
	else{
		print "el $num es menor que $nume ";
	}

	print"<h1>ejer8</h1>";
	$numo=rand(1,200);
	echo"$numo<br/>";
	if($numo<10)
	{
		echo "el numero tiene un digito";
	}
	else if($numo<100)
	{
		echo "el numero tiene dos digitos";
	}
	else
	{
		echo "el numero tiene tres digitos";
	}

	print"<h1>ejer9</h1>";
	$salario1=1501;
	$subida1=(($salario*25)/100)+$salario1;
	$subida2=(($salario*21)/100)+$salario1;
	$subida3=(($salario*18)/100)+$salario1;
	if ($salario1<1000)
	{
		echo"el salario es $subida1";
	}
	else if($salario1<=1500)
	{
		echo "el salario es $subida2";
	}
	else {
		echo "el salario es $subida3";
	}










	
	





 ?>
</body>
</html>