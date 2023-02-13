<!DOCTYPE html>
<head>
    <meta charset="utf8">
    <title>ejer7</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        numero de elementos<input type="number" name="elementos" required>
        <input type="submit" value="aceptar">
    </form>
    <form action="" method="get">
    <?php
    $numlemento=$_POST["elementos"];
    if(isset($numlemento)){
        for($i=1;$i<=$numlemento;$i++){
            echo "</br>$i<input type='number' name='num$i' required>";
        }
        echo"</br><input type='submit' value='aceptar'>";
    }
    ?>
    </form>
    <?php
    for($x=1;$x<=10;$x++){
        $num.$x=$_GET["$num.$x"];
        /*if(isset($num$x)){
            $numeros=array($num);
        }
    for ($i)
        #if isset($num
    */
    }

    
    ?>
</body>