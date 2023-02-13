<!DOCTYPE html>
<head>
    <title>ejer</title>
    <meta charset="UTF-8">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="number" name="num1" placeholder="numero" required>
        <input type="number" name="num2" placeholder="numero 2" >
        <input type="number" name="num3" placeholder="numero 3" >
        <input type="submit">
    </form>
    <?php
    $num1=$_POST["num1"];
    $num2=$_POST["num2"];
    $num3=$_POST["num3"];
    

    if(empty($num3)){
        if(empty($num2)){
            if(isset($num1)){
                unset ($num2);
                unset ($num3);
                function media($num1){
                    $media=$num1;
                    echo $media;
                }
                media($num1);
            }
        }else{
            unset ($num3);
            function media($num1,$num2){
                $media=($num1+$num2)/2;
                echo $media;
            }
            media($num1,$num2);
        }
    }   
    else{
        function media($num1,$num2,$num3){
            $media=($num1+$num2+$num3)/3;
            echo $media;
        }
        media($num1,$num2,$num3);
    }

    ?>
</body>
