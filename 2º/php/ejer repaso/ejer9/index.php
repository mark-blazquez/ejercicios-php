<!DOCTYPE html>
<head>
    <meta charset="utf8">
    <title>ejer7</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="number" name="num1" placeholder="introduce un numero"required>
        <input type="submit">
    </form>
    <?php 
    $num1=$_POST["num1"];
    if(isset($num1)){
        for($num=1;$num<=10;$num++){
            $num2=$num1*$num;
            echo"$num1 * $num = $num2</br>";
        }
    }
    ?>
</body>
