<!DOCTYPE html>
<head>
    <meta charset="utf8">
    <title>ejer6</title>
</head>
<body>
    <div>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label>introduce el primer numero </label>
            <input type="numeric" name="numerouno" required ></br>
            <label>introduce el segundo numero</label>
            <input type="numeric" name="numerodos"  required ></br>
            <label>seleccione la operacion</label></br>
            <input type="radio" name="suma" >suma</input >
            <input type="radio" name="resta" >resta</input >
            <input type="radio" name="producto">producto</input >
            <input type="radio"  name="cociente">cociente</input ></br>
            <input type="submit" value="enviar datos">
            
        </form>
    </div>
    <?php
        $numerouno=$_POST["numerouno"];
        $numerodos=$_POST["numerodos"];
        $numerotres=0;
        $suma=$_POST["suma"];
        $resta=$_POST["resta"];
        $producto=$_POST["producto"];
        $cociente=$_POST["cociente"];
        if(isset($suma)){
            echo "la suma de  $numerouno + $numerodos = "; $numerotres=$numerouno+$numerodos;echo "$numerotres</br>";
        }
        if(isset($resta)){
            echo "la resta de  $numerouno - $numerodos = "; $numerotres=$numerouno-$numerodos;echo"$numerotres</br>";
        }
        if(isset($producto)){
            echo "el producto de  $numerouno * $numerodos = "; $numerotres=($numerouno*$numerodos);echo"$numerotres</br>";
        }
        if(isset($cociente)){
            echo "el cociente de  $numerouno / $numerodos = "; $numerotres=$numerouno/$numerodos;echo"$numerotres</br>";
        }

    ?>
</body>