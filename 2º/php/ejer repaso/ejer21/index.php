<!DOCTYPE html>
<head>
    <title>ejer</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        $dias=array("lunes","martes","miercoles","jueves","viernes","sabado","domingo");
        foreach ($dias as $dia){
            echo ", $dia";
        } 
        print_r($dias);
        $ola=implode(", ", $dias);
        echo $ola;
        
    ?>
</body>