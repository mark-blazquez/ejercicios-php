<!DOCTYPE html>
<head>
    <title>ejer12</title>
    <meta charset="UTF-8">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="date" name="fechanacimiento" placeholder="fecha" required>
        <input type="submit">
    </form>
    <?php
        $fechanacimiento=$_POST["fechanacimiento"];
        if(isset($fechanacimiento)){
            $hoy = date("Y-m-d");
            echo "hoy es  $hoy";
            echo" nacistes el $fechanacimiento ";
            $edad=$hoy -$fechanacimiento;
            echo"y tu edad es de $edad años ";
        }

    ?>
</body>
        