<?php

    $arr = [1, 2, 3];

    // adiconando ao final um valor
    $arr[] = 4;

    print_r($arr);
    echo "<br>";

    $arr[] = 5;

    print_r($arr);
    echo "<br>";

    // substituíndo o valor em uma array
    $arr[4] = 2;

    print_r($arr);
    echo "<br>";

    // sem a contagem do índice
    $arr2 = [];

    $arr2[] = 3;

    print_r($arr2);
    echo "<br>";

    $arr3 = [];
    $arr3["Teste"] = "Testando";

    print_r($arr3);
    echo "<br>";

?>