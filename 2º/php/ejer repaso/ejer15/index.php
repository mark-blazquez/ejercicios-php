<!DOCTYPE html>
<head>
    <title>ejer</title>
    <meta charset="UTF-8">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="numeric" name="altura" placeholder="altura triangulo" required>
        <input type="numeric" name="base" placeholder="base triangulo" required>
        <input type="submit">
    </form>
    <?php
    $altura=$_POST["altura"];
    $base=$_POST["base"];
    function superficietriangulo($altura,$base){
        $superficie=$base*(0.5*$altura);
        return $superficie;
    }
    echo superficietriangulo($altura,$base);
     

    ?>
</body>