<?php
    session_start();
    $correo=$_POST["correo"];
    $contra=$_POST["contra"];
    $seguir=$_POST["mantenersesion"];
    $time = time();
    $momento=date("d-m-Y (H:i)", $time);

    $dsn = 'mysql:supermercado;host=localhost:3306';
    $usuario = 'usuario';
    $contrasena = "Usuario@1111";
    /* $dsn = 'mysql:pruebasvagrant;host=localhost';
    $usuario = 'root';
    $contrasena = "ola";*/

    if(isset($_COOKIE["usuario"])){#en caso de haber un cookie lo k hace es comprobar los datos de la cookie para iniciar la sesion
        $datoscookie=$_COOKIE["usuario"];
		$datos=unserialize($datoscookie);
		list ($correo,$contra)=$datos;

        try{
            $con = new PDO($dsn, $usuario, $contrasena);
            $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            

            //$sql ='SELECT correo,contra,nombre FROM pruebasvagrant.prueba where correo=:correo and contra=:contra';
            $sql ='SELECT correo,contra,nombre FROM supermercado.prueba where correo=:correo and contra=:contra';
            $sentencia=$con->prepare($sql);
            $sentencia->bindValue(":correo", $correo);
            $sentencia->bindValue(":contra", $contra);
            $sentencia->execute();
            foreach( $sentencia as $row){
                $row[0];
                $row[1];
                $nombre=$row[2];
            }
            
            if (!$sentencia) {
                echo "<p>Error en la consulta.</p>";
            }
            else
            { 
                setcookie("tiempo$row[2]",serialize($momento),time()+(365*24*60*60));

                echo "hola  $row[2] "; 
                if(isset($_COOKIE["tiempo$row[2]"])){
                    $fechas=$_COOKIE["tiempo$row[2]"];
		            $fecha=unserialize($fechas);
                    echo ", su ultima visita fue el $fecha ";
                }else{
                    echo ", no hay datos de su ultimo inicio de sesion";
                }

                                
                ?>
                </br><a href="./cierre.php"><input type="button" value="cerrar sesion">
                <a href="./index.php"><input type="button" value="volver a inicio">

                <?php
                           
            }																        
        }
        catch(PDOException $e){
            echo 'Fallo la conexion:'.$e->GetMessage();
        }
    }else{
        try{
            $con = new PDO($dsn, $usuario, $contrasena);
            $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            

            $sql ='SELECT correo,contra,nombre FROM supermercado.prueba where correo=:correo and contra=:contra';
            $sentencia=$con->prepare($sql);
            $sentencia->bindValue(":correo", $correo);
            $sentencia->bindValue(":contra", $contra);
            $sentencia->execute();
            foreach( $sentencia as $row){
                $correoseguro=$row[0];
                $contrasegura=$row[1];
                $row[2];
            }
            
            if (!$sentencia) {
                echo "<p>Error en la consulta.</p>";
            }
            else
            { 
                if(isset($correo)){
                    if($correo === $correoseguro){
                        if(isset($contra)){
                            if($contra === $contrasegura){
                                session_start();
                                $_SESSION["usuario"]=$_POST["correo"];
                                
                                setcookie("tiempo$row[2]",serialize($momento),time()+(365*24*60*60));
                                echo "hola  $row[2] "; 
                                if(isset($_COOKIE["tiempo$row[2]"])){
                                    $fechas=$_COOKIE["tiempo$row[2]"];
                                    $fecha=unserialize($fechas);
                                    echo ", su ultima visita fue el $fecha ";
                                }else{
                                    echo ",no hay datos de su ultimo inicio de sesion";
                                }
                                
                                if(isset($seguir)){
                                    $guardar=array($correo,$contra);
                                    setcookie("usuario",serialize($guardar),time()+(365*24*60*60));
                                    
                                }
                                ?>
                                    </br><a href="./cierre.php"><input type="button" value="cerrar sesion">
                                    <a href="./index.php"><input type="button" value="volver a inicio">

                                <?php
                            }else{
                                header("location:pagerror.html");
                            } 
                        }else{
                            header("location:pagerror.html");
                        } 

                    }else{
                        header("location:pagerror.html");
                    } 
                }else{
                    header("location:pagerror.html");
                } 
            }																        
        }
        catch(PDOException $e){
            echo 'Fallo la conexion:'.$e->GetMessage();
        }
    }

?>