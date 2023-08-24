<?php

    $x = 10;
    echo "Contagem de 10 em 10 <br><br>";

    while($x < 100) { 
        echo $x . "<br>";
        $x+=10;

        if($x == 30) {
            echo "Pulou a execução <br>";
            $x+=10;
            if($x == 40){
                echo "Pulou a execução <br>";
                $x+=10;
            }
            continue;
        }

        if($x == 100) {
            echo "Parando a execução em 100 <br>";
            break;
        }        
    }  
    
?>