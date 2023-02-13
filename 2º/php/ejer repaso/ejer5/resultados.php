<?php
$peso=$_POST["peso"];
$altura=$_POST["altura"];
$alturametros=$altura/100;
$imc=$peso/($alturametros*$alturametros);
if($peso>0){
    if($alturametros>0){
        echo" tu imc es $imc y estas en el rango de ";
        if($imc<16){
            echo"delgadez severa";
        }elseif($imc<16.99){
            echo"delgadez moderada";
        }elseif($imc>17 && $imc<=18.49){
            echo"delgadez aceptable";
        }elseif($imc>18.49 && $imc<25){
            echo"normal";
        }elseif($imc==25){
            echo"sobrepeso";
        }elseif($imc>25 && $imc<30){
            echo"preobeso";
        }elseif($imc>=30){
            echo"obeso";
        }
    }else{
        echo"intoduce bien los datos fiera ";
    }
}else{
    echo"intoduce bien los datos fiera ";
}
?>