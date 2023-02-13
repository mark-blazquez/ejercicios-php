<!DOCTYPE html>
<head>
    <title>ejer</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    $EU = array( "Italia"=>"Roma", "Luxemburgo"=>"Luxemburgo", "Belgica"=> "Bruselas",
    "Dinamarca"=>"Copenhage", "Finlandia"=>"Helsinki", "Francia" => "Paris",
    "Eslovakia"=>"Bratislava", "Eslovenia"=>"Ljubljana", "Alemania" => "Berlin","Grecia"
    => "Atenas","Irlanda"=>"Dublin", "Holanda"=>"Amsterdam","Portugal"=>"Lisboa",
    "España"=>"Madrid","Suecia"=>"Estocolmo", "Reino
    Unido"=>"Londres","Chipre"=>"Nicosia", "República Checa"=>"Praga",
    "Estonia"=>"Tallin","Hungria"=>"Budapest", "Malta"=>"Valetta","Austria" => "Viena",
    "Polonia"=>"Varsovia") ;
    
    foreach ($EU as $pais => $capital){
        echo"</br>la capital de $pais es $capital ";
    }
    
    echo"</br></br>orden por nombre de pais ";
    ksort($EU);
    foreach($EU as $pais => $capital){
        
        echo"</br>la capital de $pais es $capital ";
    }


    echo"</br></br>orden por nombre de capital";
    asort($EU);
    foreach($EU as $pais => $capital){
        
        echo"</br>la capital de $pais es $capital ";
    }

    ?>
</body>