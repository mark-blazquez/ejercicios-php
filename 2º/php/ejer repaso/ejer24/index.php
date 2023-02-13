<!DOCTYPE html>
<head>
    <title>ejer</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    $pila =array("cinco"=>5,"uno"=>1,"cuatro"=>4,"dos"=>2,"tres"=>3) ;

    echo"</br>asort</br>";#vincula su indice con su valor y los ordena por valor
    asort($pila);
    foreach ($pila as $key => $val) {
        
        echo "$key = $val ,";
    }
    
    echo"</br>arsort</br>";#vincula su indice con su valor y los ordena por valor a la inversa 
    arsort($pila);
    foreach ($pila as $key => $val) {
        
        echo "$key = $val ,";
    }
    ksort($pila);
    echo"</br>ksort</br>";# ordena por la key orden menor a mayor--no sale lo k deberia
    foreach ($pila as $key => $val) {
        
        echo "$key = $val ,";
    }
    
    echo"</br>sort</br>";#ordena de menor a mayor por valor mostrando su indice
    sort($pila);
    foreach ($pila as $key => $val) {
        
        echo "$key = $val ,";
    }
    
    echo"</br>rsort</br>";#se ordena al inverso mirando el valor y mostarndo el indice
    rsort($pila);
    foreach ($pila as $key => $val) {
        
        echo "$key = $val ,";
    }
    
    ?>
</body>