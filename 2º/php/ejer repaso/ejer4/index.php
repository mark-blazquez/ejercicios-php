<!DOCTYPE html>
<head>
    <meta charset="utf8">
    <title>ejer4</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="number" name="num1" placeholder="introduce un numero" required>
        <p>introduce un numero debajo para saber si es multiplo del primero<p>
        <input type="number" name="num2" placeholder="introduce un numero " required></br>
        <label >elige un idioma</label>
        <select name="idioma"required>
            <option value="español">español</option>
            <option value="english">english</option>
        </select></br>
        <input type="submit" >
    </form>
    <?php
        $num1=$_POST["num1"];
        $num2=$_POST["num2"];
        $idioma=$_POST["idioma"];
        
        if($num1%$num2===0){
            if($idioma==="español"){
                echo "los numeros son $num1 y $num2 y es multiplo";
            }else{
                echo "the numbers are $num1 and $num2 and is a multiple";
            }
            
            
        }else{
            if($idioma==="español"){
                echo "los numeros son $num1 y $num2 y no es multiplo";
            }else{
                echo "the numbers are $num1 and $num2 and isn't a multiple";
            }
        }
    ?>
</body>