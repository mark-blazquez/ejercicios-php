<?php
    $nombre=$_POST["nombre"];
    $contra=$_POST["contra"];
    if(isset($nombre)){
        if($nombre==="yo"){
            if(isset($contra)){
                if($contra==="1234"){
                    echo"bienvenido";
                }else{
                    echo"acceso denegado";
                }
            }else{
                echo"acceso denegado";
            }
        }else{
            echo"acceso denegado";
        }
    }else{
        echo"acceso denegado";
    }
?>