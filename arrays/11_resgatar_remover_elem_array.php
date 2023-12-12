<?php

    $arr = [1, 2, 3, 4, 5, 6];
    print_r($arr);
    echo "<br><br>";

    echo "Removendo os elemento 1 e 2 da array: <br>";

    $removidos = array_splice($arr, 1, 2);
    print_r($removidos);
    echo "<br>";

    echo "Array removida: <br>";
    print_r($arr);
    echo "<br><br>";

    echo "Removendo os elemento a partir do elemento 4: <br>";
    $arr2 = [1, 2, 3, 4, 5, 6];

    $removidos2 = array_splice($arr2, 4);
    print_r($removidos2);
    echo "<br>";
    print_r($arr2);
    echo "<br><br>";

    echo "Removendo todos os elementos menos o primeiro e o último: <br>";
    $arr3 = [1, 2, 3, 4, 5, 6];
    $removidos3 = array_splice($arr3, 1, -1);
    print_r($removidos3);
    echo "<br>";
    print_r($arr3);
    echo "<br><br>";

?>