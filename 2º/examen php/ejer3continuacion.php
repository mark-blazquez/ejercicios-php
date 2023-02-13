<?php
#recojo la variable para extraer la info de los post dependiendo de este numero
$numpersonas=$_POST["numero"];
    #creo un array vacio al k le voy a passar luego la info
    $nombre=array();
    for($numero=1;$numero<=$numpersonas;$numero++){
                
        $_POST["nombre$numero"];
        #le paso al array esto en ultimo lugar 
        $nombre[]= $_POST["nombre$numero"];
                
    }
    #hago lo mismo pero para edad
    $edad=array();
    for($numero=1;$numero<=$numpersonas;$numero++){
        $_POST["edad$numero"];
        #le paso al array esto en ultimo lugar 
        $edad[]= $_POST["edad$numero"];
        
    }
          
    #funcion para crear un array con indices valor nombre y como valor varianble nombre
    
    $datos=array_combine($nombre, $edad); 
    echo"ordenado por edad</br>";
    #funcion que ordena el array por valor de menor a mayor y que lo paso por referncia 
    function ordenarporedad(&$array){
        arsort($array);
    }
    #llamo a la funcion e imprimo el array
    ordenarporedad($datos);
    print_r($datos);

?>
