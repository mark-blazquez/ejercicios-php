<!DOCTYPE html>
<head>
    <meta charset="utf8">
    <title>ejer7</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        0<input type="number" name="num1" required></br>
        1<input type="number" name="num2" required></br>
        2<input type="number" name="num3" required></br>
        3<input type="number" name="num4" required></br>
        4<input type="number" name="num5" required></br>
        5<input type="number" name="num6" required></br>
        6<input type="number" name="num7" required></br>
        7<input type="number" name="num8" required></br>
        <input type="submit">
    </form>
    <?php
        $num1=$_POST["num1"];
        $num2=$_POST["num2"];
        $num3=$_POST["num3"];
        $num4=$_POST["num4"];
        $num5=$_POST["num5"];
        $num6=$_POST["num6"];
        $num7=$_POST["num7"];
        $num8=$_POST["num8"];
        $numeros=array($num1,$num2,$num3,$num4,$num5,$num6,$num7,$num8);
        echo array_sum($numeros);


    ?>
</body>