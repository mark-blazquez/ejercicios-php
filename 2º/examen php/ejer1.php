<!DOCTYPE html>
<head>
    <title> ejer1</title>
</head>
<body>
    <h1> mark blazquez ejer 1</h1>
    <form action="" method="post">
        <input type="number" name="num1" placeholder="introduce un numero"required>
        <input type="number" name="num2" placeholder="introduce un numero"required>
        <input type="number" name="num3" placeholder="introduce un numero"required>
        <input type="number" name="num4" placeholder="introduce un numero"required>
        <input type="text" name="valor" placeholder="verdadero o false">
        <input type="submit">
    </form>
    <?php
    #recojo las variables que paso en el formulario
    $num1=$_POST["num1"];
    $num2=$_POST["num2"];
    $num3=$_POST["num3"];
    $num4=$_POST["num4"];
    $valor=$_POST["valor"];
    #creo el array k le voy a pasar a la funcion
    $numeros=array($num1,$num2,$num3,$num4);
    #defino la funcion
    function ordena_array($array,$opcional=false){
        if($opcional!=false){#en caso de ser verdadero lo ordena de menor a mayor
            sort($array);
            print_r($array);
        }
        else{#en caso de ser falso lo ordena de mayor a menor 
            arsort($array);
            print_r($array);
        }
    }
    #ejecuto la funcion
    ordena_array($numeros,$valor);
    ?>