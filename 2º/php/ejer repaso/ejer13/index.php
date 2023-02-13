<!DOCTYPE html>
<head>
    <title>ejer</title>
    <meta charset="UTF-8">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="date" name="fecha" placeholder="fecha" required>
        <input type="date" name="fecha2" placeholder="fecha" required>
        <input type="submit">
    </form>
    <?php
        $fecha=$_POST["fecha"];
        $fecha=$_POST["fecha2"];
        
        
    ?>
</body>