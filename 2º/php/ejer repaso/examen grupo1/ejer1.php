<!DOCTYPE html>
<head>
    <title> ejer1</title>
</head>
<body>
    <h1> mark blazquez ejer 1</h1>
    <form action="" method="post">
        <input type="number" name="num1" placeholder="introduce un numero"required>
        <input type="number" name="num2" placeholder="introduce un numero">
        <input type="number" name="num3" placeholder="introduce un numero">
        <input type="number" name="num4" placeholder="introduce un numero">
        <input type="number" name="num5" placeholder="introduce un numero">
        <input type="number" name="num6" placeholder="introduce un numero">
        <input type="submit">
    </form>

</body>
<?php
    $num1=$_POST["num1"];
    $num2=$_POST["num2"];
    $num3=$_POST["num3"];
    $num4=$_POST["num4"];
    $num5=$_POST["num5"];
    $num6=$_POST["num6"];



    function calcularmedia($num1=null,$num2=null,$num3=null,$num4=null,$num5=null,$num6=null,$dividendo){ 
        $numdivision=array();
        if($num1 != null){
            $numdivision[]=$num1;
            if($num2 != null){
                $numdivision[]=$num2;
                if($num3 != null){
                    $numdivision[]=$num3;
                    if($num4 != null){
                        $numdivision[]=$num4;
                        if($num5 != null){
                            $numdivision[]=$num5;
                            if($num6 != null){
                                $numdivision[]=$num6;
                            }
                        }
                    }
                }
            }
        }
       
        $dividendo=count($numdivision);
        
        $total=($num1+$num2+$num3+$num4+$num5+$num6)/$dividendo;
        return $total;
            
    }
    
    $media=calcularmedia ($num1,$num2,$num3,$num4,$num5,$num6,$dividendo);
    echo $media;
    
 
?>