
<!DOCTYPE html>
<head>
    <title>ejer2</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>programa para calcular el mayor numero de tres</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="number" name="numero1" placeholder="introduce numero1" required>
            <input type="number" name="numero2" placeholder="introduce numero2" required>
            <input type="number" name="numero3" placeholder="introduce numero3" required>
            <input type="submit">
    </form>
    <?php
        /*
        $numero1=$_POST["numero1"];
        $numero2=$_POST["numero2"];
        $numero3=$_POST["numero3"];
        
        if($numero1>$numero2){
            $numero1=$numeromayor;
            if($numeromayor>$numero3){
                if($numero2>$numero3){
                    $numero2=$numeromedio;
                    $numero3=$numeropequeño;
                }else{
                    $numero2=$numeropequeño;
                    $numero=$numeromedio;
                }
            }
        }else{
            $numero2=$numeromayor;
            if($numero1>$numero3){
                $numero1=$numeromedio;
                $numero3=$numeropequeño;
            }else{
                $numero3=$numeromedio;
                $numero1=$numeropequeño;
            }
        }
        
        if(isset($numeromayor)){
    ?>
    <h2>el numero <?php echo $numeromayor?> es mayor que <?php echo $numeromedio?> mayor que <?php echo $numeropequeño?></h2>
    <?php{*/
    
    
        $numero1=$_POST["numero1"];
        $numero2=$_POST["numero2"];
        $numero3=$_POST["numero3"];
        echo "los numeros eran $numero1, $numero2, $numero3, y ordenados de mayor a menor son ";

        $numeros=array($numero1,$numero2,$numero3);
        sort($numeros);
        foreach ($numeros as $num){
           echo "$num ,";
        }    
    ?>
</body>
