<!DOCTYPE html>
<head>
    <title ejer1></title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="num1" placeholder="introduce un numero"required>
        <input type="number" name="num2" placeholder="introduce un numero"required>
        <input type="number" name="num3" placeholder="introduce un numero"required>
        <input type="number" name="num4" placeholder="introduce un numero"required>
        <input type="number" name="num5" placeholder="introduce un numero"required>
        <input type="number" name="num6" placeholder="introduce un numero"required>
        <input type="submit">
    </form>

</body>
<?php
    $num1=$_POST["num1"];
    $num2=$_POST["num2"];
    $num3=$_POST["num3"];
    $num4=$_POST["num4"];
    $num5=$_POST["num5"];
    $num6=$_POST["num6"];

    $numeros=array($num1,$num2,$num3,$num4,$num5,$num6);


    function sumatoria(&$numeros){
        $ultimovalor=array_sum($numeros);
        $numeros[]=$ultimovalor;
        
    }
    sumatoria($numeros);
    print_r($numeros);
   
    
    
    
    
?>