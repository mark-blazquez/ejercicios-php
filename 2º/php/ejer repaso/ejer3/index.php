<!DOCTYPE html>
<head>
    <meta charset="utf8">
    <title>ejer3</title>
</head>
<body>
    <h1>programa para calcular aumento de salario</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="number" name="salario" placeholder="introduce tu salario" required>
        <input type="submit" >
    </form>
    <?php
        $salario=$_POST["salario"];
        if(isset($salario)){
            echo"tu salario es de $salario y con el aumento se quedaria en ";
            if($salario<1000){
                $salario=$salario*1.15;
                echo $salario;
            }elseif($salario>=1000){
                $salario=$salario*1.21;
                echo $salario;
            }elseif($salario>1500){
                $salario=$salario*1.18;
                echo $salario;
            }
        }
       
    ?>
</body>