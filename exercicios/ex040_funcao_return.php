<?php

    function numeroX($x) {
        return $x;
    }

    $x = numeroX(3);

    function numeroY($y) {
        return $y;
    }

    $y = numeroX(5);

    function soma($x, $y) {
        return $x + $y;
    }    
    
    echo "Valor de X: $x <br>";
    echo "Valor de Y: $y <br>";
    echo "X + Y = " . soma($x, $y) ."<br>";

?>