<?php 
    $numpersonas=$_POST["numero"];
    #echo $numpersonas;
    $nombre=array();
    for($numero=1;$numero<=$numpersonas;$numero++){
                
        $_POST["nombre$numero"];
        $nombre[]= $_POST["nombre$numero"];
                
    }
    $edad=array();
    for($numero=1;$numero<=$numpersonas;$numero++){
        $_POST["edad$numero"];
        $edad[]= $_POST["edad$numero"];
        
    }
          
    #funcion para crear un array con indices un valor y como valor otro valor
    
    $datos=array_combine($nombre, $edad); 
    echo"ordenado por edad</br>";#valor
    asort($datos);
    foreach($datos as $nombres => $edades){
        echo "su nombre es $nombres y su edad es $edades</br>";
    }
    echo"ordenado por nombre</br>";#indice
    ksort($datos);
    foreach($datos as $nombres => $edades){
        echo "su nombre es $nombres y su edad es $edades</br>";
    }
                
?>