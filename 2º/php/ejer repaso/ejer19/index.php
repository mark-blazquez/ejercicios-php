<!DOCTYPE html>
<head>
    <title>ejer</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        $frase="bienvenido a la aventura de aprender php</br>";
        echo $frase;
        
        $palabra="php";
        $pos1 = stripos($frase, $palabra);
        echo "la posicion de la palabra php es la $pos1</br>";
        echo substr_replace($frase, 'mision', 16, 8) . "<br />\n";

    ?>
    
</body>