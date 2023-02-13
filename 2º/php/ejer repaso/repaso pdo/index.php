<?php
    /*conexion*/
    /*sql local*/
    /*$dsn = 'mysql:pruebasvagrant;host=localhost';
    $usuario = 'root';
    $contrasena = "ola";*/
    $dsn = 'mysql:supermercado;host=localhost:3306';
    $usuario = 'usuario';
    $contrasena = "Usuario@1111";
    try{
        $con = new PDO($dsn, $usuario, $contrasena);
        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        //$sentencia = $con->prepare('SELECT nombre FROM pruebasvagrant.prueba');
        $sentencia = $con->prepare('SELECT nombre,contra FROM supermercado.prueba');
        $sentencia->execute();

        if (!$sentencia) {
            echo "<p>Error en la consulta.</p>";
        }
        else
        { 
            foreach($sentencia as $row)
            {
                echo "el nombre del cliente es $row[0]";
                echo ", y su contraseña es  $row[1]</br>";
        
            }
        }																        
    }
    catch(PDOException $e){
        echo 'Fallo la conexion:'.$e->GetMessage();
    }
    

?>