<!DOCTYPE html>
<head>
    <title>ejer</title>
    <meta charset="UTF-8">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="palabra1" placeholder="palabra" required>
        <input type="text" name="palabra2" placeholder="palabra 2" require>
        <input type="submit">
    </form>
    <?php
        $palabra1=$_POST["palabra1"];
        $palabra2=$_POST["palabra2"];
        
        
        function comparacion($palabra1,$palabra2){
            $numeromagico=substr_compare($palabra1,$palabra2 ,-3, 3, $case_insensitivity = true);
            echo "$numeromagico</br>";
            return $numeromagico;
            
        }
        function comparacion2($palabra1,$palabra2){
            $numeromagico2=substr_compare($palabra1,$palabra2 ,-2, 2, $case_insensitivity = true);
            echo "$numeromagico2</br>";
            return $numeromagico2;
        }


        if(isset($palabra1)){
            $ola=comparacion($palabra1,$palabra2);
            if($ola ===0){
                echo "la palabra rima";
            }
            else{
                $ola2=comparacion2($palabra1,$palabra2);
                if($ola2 ===0){
                    echo "la palabra rima un poco";
    
                }else{
                    echo"las palabras no riman";
                }
            }
            
        }

    ?>
</body>