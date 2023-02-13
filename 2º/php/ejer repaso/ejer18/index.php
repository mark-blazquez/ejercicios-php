<!DOCTYPE html>
<head>
    <title>ejer</title>
    <meta charset="UTF-8">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="frase" placeholder="frase" required>
        <input type="text" name="letra" placeholder="letra" require>
        <input type="submit">
    </form>
    
    <?php
        $frase=$_POST["frase"];
        $letra=$_POST["letra"];

        function contar($frase,$letra){
            $numero=substr_count($frase,$letra,0,) ;
            return $numero;
        }
        $numero=contar ($frase,$letra);
        if(isset($letra)){
        echo"el numero de veces que aparacece $letra en la frase es de $numero";}

    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="correo" placeholder="correo" required>
        <input type="submit">
    </form>
    <?php
        $correo=$_POST["correo"];
        if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $correo)){
            echo "este correo es valido</br> ";
            $separacion=explode("@",$correo);
            echo "$separacion[0]</br>";
            echo "$separacion[1]</br>";
        }
    ?>
</body>