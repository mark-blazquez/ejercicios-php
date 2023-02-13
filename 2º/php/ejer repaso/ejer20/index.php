<!DOCTYPE html>
<head>
    <title>ejer</title>
    <meta charset="UTF-8">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="fecha" placeholder="fecha" required>
        <input type="submit">
    </form>
    <?php
        $fecha=$_POST["fecha"];
        function formatear($fecha){
            echo date("d/m/Y", strtotime($fecha));
        }
        if (isset($fecha)){
            echo "$fecha</br>";
            formatear($fecha);
        }
    ?>
</body>
