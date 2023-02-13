<!DOCTYPE html>
<head>
    <title>ejer</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    $colores=array(
        "fuerte"=>array("rojo"=>"FF0000","verde"=>"00FF00","azul"=>"0000FF"),
        "suave"=>array("rosa"=>"FE9ABC","amarillo"=>"FDF189","malva"=>"BC8F8F")
    ); 
    foreach($colores as $color =>$colorid){
        echo "</br>colores $color :";
        foreach($colorid as $detalle => $exa){
            echo "<span style='background-color: #$exa;'> $detalle: $exa  </span>";
        }
    };   
    ?>
</body>