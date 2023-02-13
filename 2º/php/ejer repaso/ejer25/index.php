<!DOCTYPE html>
<head>
    <title>ejer</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    $num1=rand(1,10);
    $num2=rand(1,10);
    $num3=rand(1,10);
    $num4=rand(1,10);
    $num5=rand(1,10);
    $num6=rand(1,10);
    $num7=rand(1,10);
    $num8=rand(1,10);
    $num9=rand(1,10);
    $num10=rand(1,10);

    $numeros=array( $num1, $num2, $num3, $num4, $num5, $num6, $num7, $num8, $num9, $num10);
    foreach($numeros as $indice=>$numero){
        echo"</br>su indice es $indice  y su numero $numero";
        if($numero ==2){
            echo"<= este es lo que buscas";
        }
    }
    ?>
</body>