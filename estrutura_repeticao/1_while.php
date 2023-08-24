<?php

    // contador
    $x = 0;

    while($x < 10) {
        echo $x . "<br>";
        // repetição (x + 1) < 10
        $x = $x + 1;
    }

    echo "Finalizando a repetição 1 <br><br>";

    $y = 5;

    while($y < 10) {
        echo $y . "<br>";        
        $y += 1;
    }
    echo "Finalizando a repetição 2 <br><br>";

    $z = 5;

    while($z > 0) {
        echo $z . "<br>";        
        $z = $z - 1;
    }
    echo "Finalizando a repetição 3 <br><br>";

    // decremento
    $a = 10;

    while($a > 0) {
        echo $a . "<br>";        
        $a--;
    }
    echo "Finalizando a repetição 4 <br><br>";
    
    // somente impares
    $a = 10;

    while($a > 0) {
        if($a % 2 != 0) {
            echo $a . "<br>";        
        }
        $a--;
    }
    echo "Finalizando a repetição 5 <br><br>";

?>