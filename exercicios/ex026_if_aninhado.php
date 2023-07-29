<?php

    $a = 10;
    $b = 90;
    $c = "texto";

    if(is_int($a) || is_float($a)) {

        $x = $a * 2;

        if($x > 100) {
            echo "Multiplicação 1 maior que 100 <br>";
        } else {
            echo "Multiplicação 1 menor que 100 <br>";
        }

    } else {
        echo "Não é um número <br>";
    }
    echo "<br>";

    if(is_int($b) || is_float($b)) {

        $x = $b * 2;

        if($x > 100) {
            echo "Multiplicação 2 maior que 100 <br>";
        } else {
            echo "Multiplicação 2 menor que 100 <br>";
        }

    } else {
        echo "Não é um número <br>";
    }
    echo "<br>";

    if(is_int($c) || is_float($c)) {

        $x = $c * 2;

        if($x > 100) {
            echo "Multiplicação 3 maior que 100 <br>";
        } else {
            echo "Multiplicação 3 menor que 100 <br>";
        }

    } else {
        echo "Não é um número <br>";
    }

?>