<?php

	if (isset($_POST["operation"=="suma"]and isset($_POST["numero"])and isset($_POST["numero2"]))) 
	{
		$num3=$numero+$numero2;
		echo "<h1>la suma de $numero y $numero2 es $num3</h1>";
	}
	else if(isset($_POST["operation"=="resta"]and isset($_POST["numero"])and isset($_POST["numero2"])))
	{
		$num3=$num1-$num2;
		echo "<h1>la resta de $numero y $numero2 es $num3</h1>";	
	}
	else if(isset($_POST["operation"=="producto"]and isset($_POST["numero"])and isset($_POST["numero2"])))
	{
		$num3=$num1*$num2;
		echo "<h1>el producto de $numero y $numero2 es $num3</h1>";
	}
	else if (isset($_POST["operation"=="cociente"]and isset($_POST["numero"])and isset($_POST["numero2"])))
	{
		$num3=$num1/$num2;
		echo "<h1>el cociente de $numero y $numero2 es $num3</h1>";
	}
	else
	{
		echo "<h1>eres tonto no pulses lo que no debes</h1>";
	}
?>