<!DOCTYPE html>
<head>
    <title ejer1></title>
</head>
<body>
    <form action="" method="post">
        introduce nuemero de personas
        <input type="number" name="numpersonas" placeholder="introduce un numero"required>
        <input type="submit">
    </form>
</body>
<?php
    $numpersonas=$_POST["numpersonas"];
    if(isset($numpersonas)){
        ?>
        <form action="ola.php" method="post">
        <input style="visibility: hidden;" type="number" name="numero" value="<?php echo $numpersonas ?>"required></br>
        <?php 
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
        
        <?php
    }
   
?>

