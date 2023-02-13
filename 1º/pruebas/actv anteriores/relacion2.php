<!DOCTYPE html>
<html>
<head>
	<title>relacion instruccion repetitiva</title>
</head>
<body>
<?php
	/*print"<h1>ejercicio 10</h1>";
	$x=2;
	$y=0;
	for ($y=0;$y<=10;$y++)
	{
		$z=$x*$y;
		echo"$x*$y=$z<br/>";
	}


	while($x=0;$x<=10;$x++)
	{
		$x=0;
		$y=2;
		$z=$y*$x;
		echo"$y*$x=$z<br/>";
		$x++;
	}


	do{
		$x=0;
		$y=2;
		$z=$y*$x;
		echo"$y*$x=$z<br/>";
		$x++;
	} while($x<=10);*/



	print"<h1>ejercicio 11</h1>";
	$x=2;
	for($x>2;$x<=100;$x=$x+2)
	{
		echo"$x</br>";
	}

	print"<h1>ejercicio 12</h1>";
	$num = 0;
	$suma = 0;
 	while ($num <20) {
      $num = $num + 1;
      $suma = $suma + $num;
      echo "$num.<br>";
    }
     echo "La sumatoria es: $suma";


	print"<h1>ejercicio 13</h1>";

	$divisor = 53;
	for($i = 1; $i <= $divisor; $i ++) {
        if ($divisor % $i == 0) {
            echo "$i<br/>";
        }
	}





	print"<h1>ejercicio 15</h1>";
	$num=35;
	echo "es el $num primo?</br>";
	for ($i=1;i<=$num;$i++)
	{
		
	}



	print"<h1>ejercicio 16</h1>";



	




	



 ?>
</body>
</html>