<?php
    // verificando se a condição é um float

    $a = "teste";
    $b = 12.8;
    
    if(is_float($a)) {
        echo "float 1! <br>";
    }

    if(is_float($b)) {
        echo "float 2! <br>";
    }
    
    if(is_float("João")) {
        echo "float 3! <br>";
    }

    if(is_float(2.35)) {
        echo "float 4! <br>";
    }

    if(is_float(10)) {
        echo "float 5! <br>";
    }
?>