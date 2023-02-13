<!DOCTYPE html>
<head>
    <title> ejer2</title>
    <link rel="stylesheet" type="text/css" href="stilo.css">
</head>
<body>
    <h1> mark blazquez ejer 2</h1>
    <form action="" method="post" >
        <input type="number" name="fila" placeholder="numero de filas ">
        <input type="number"  name="columna" placeholder="numero de columnas ">
        <input type="text" name="colorcabeza" placeholder="introduce un color cabecera ">
        <input type="text" name="colorpar" placeholder="introduce un color par ">
        <input type="text" name="colorimpar" placeholder="introduce un color impar">
        <input type="submit">
    </form>
    <?php
    #recojo las variables
    $fila=$_POST["fila"];
    $columna=$_POST["columna"];
    $cabecera=$_POST["colorcabeza"];
    $par=$_POST["colorpar"];
    $impar=$_POST["colorimpar"];

    #creo la tabla
    echo "<table id='tabla' style border=1>";
    #bucle para las filas
    
    for ($x=1;$x<=$fila;$x++){
        #en caso de ser par muestra el color pasado por la variable en caso de impar el que le pertenezca
        if ($x % 2 == 0){ 
            echo "<tr bgcolor='$par'>";}
            else{
            echo "<tr bgcolor='$impar'>";}
        for ($y=1;$y<=$columna;$y++){
        echo "<td>ola</td>";
        
        }
        echo"</tr>";
    }
    
    echo "</table>"; 

    ?>