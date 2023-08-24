<?php

    $arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
    echo "Array de 10 em 10 <br><br>";

    $i = 0;

    while($i < count($arr)) { 
        $numeroAtual = $arr[$i];

        if($numeroAtual == 30 || $numeroAtual == 40) {
            $i++;
            continue;            
        }
        
        echo "Elemento: $numeroAtual <br>";
            $i++;
    } 

?>