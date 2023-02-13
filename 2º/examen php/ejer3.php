<!DOCTYPE html>
<head>
    <title ejer1></title>
</head>
<body>
    <h1> mark blazquez ejer 3</h1>
    <form action="" method="post">
        introduce nuemero de personas
        <input type="number" name="numpersonas" placeholder="introduce un numero"required>
        <input type="submit">
    </form>
</body>
<?php
    #esto es el valor para imprimir los input
    $numpersonas=$_POST["numpersonas"];
    if(isset($numpersonas)){
        ?>
        
        <form action="ejer3continuacion.php" method="post">
        <!--esto va a ser para pasarselo a la otra pag -->
        <input style="visibility: hidden;" type="number" name="numero" value="<?php echo $numpersonas ?>"required></br>
        <?php 
        #este va a ser el bucle para imprimir dependiendo del input anterior
        for($x=1;$x<=$numpersonas;$x++){
            ?>
            
                introduce nombre
                <input type="text" name="nombre<?php echo $x ?>" required>
                introduce edad
                <input type="number" name="edad<?php echo $x ?>" required></br>
                
             
            <?php    
        }
        ?>
        <input type="submit">
        </form>
        
        <?php
    }

   
?>
