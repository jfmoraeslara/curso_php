<?php

    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    function soma($a, $b) {
        return $a + $b;
    }

    function subtracao($a, $b) {
        return $a - $b;
    }

    $resultado = array_reduce($arr, "soma");

    echo "Soma dos números: $resultado <br>";

    $resultado2 = array_reduce($arr, "subtracao");

    echo "Subtracao dos números: $resultado2 <br>";

?>