<?php 
    $num1=$_POST["num1"];
    $num2=$_POST["num2"];
    if($num1>0){
        if($num2>0){
            if($num1>$num2){
                echo"estos serian los numeros que se encuentran entre $num1 y $num2 ---";
                for($numerodeenmedio=$num2;$numerodeenmedio<$num1;$numerodeenmedio++){
                    if($numerodeenmedio>$num2){
                        echo"$numerodeenmedio , ";
                        /*if($numerodeenmedio%2===0){
                            $numpares;
                        }
                        elseif($numerodeenmedio%3===0){
                            $numimpares;
                        }*/                    
                    }
                }
                echo"los divisores de 2 son --$numpares";
                
            }else{
                echo"estos serian los numeros que se encuentran entre $num1 y $num2 -";
                for($numerodeenmedio=$num1;$numerodeenmedio<$num2;$numerodeenmedio++){
                    if($numerodeenmedio>$num1){
                        echo"$numerodeenmedio , ";
                        
                    }
                }
                /*      
                echo"los divisores de 2 serian -";
                if($numerodeenmedio%2===0){
                    echo"$numerodeenmedio,";
                }
                echo "los divisores de 3 serian-";
                if($numerodeenmedio%3===0){
                    echo"$numerodeenmedio,";
                }**/
            }
                
        }else{
            echo"mete un numero entero positivo";
        }
    }else{
        echo"mete un numero entero positivo";
    }
?>