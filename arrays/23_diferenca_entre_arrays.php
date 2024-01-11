<?php

    // que tem incomum entre a primeira array com a segunda.
    $arr1 = [0, 1, 2, 3, 4, 5, 6, 7];
    $arr2 = [4, 5, 6, 7, 8, 9, 10];
    $arr3 = [11, 12, 13, 14, 15];

    echo "Array 1: ";
    print_r($arr1);
    echo "<br>";

    echo "Array 2: ";
    print_r($arr2);
    echo "<br>";

    echo "Array 3: ";
    print_r($arr3);
    echo "<br><br>";
    
    echo "Comparando Array 1 com as demais: <br>";
    $diff = array_diff($arr1, $arr2, $arr3);
    print_r($diff);
    echo "<br><br>";

    echo "Comparando Array 2 com as demais: <br>";
    $diff = array_diff($arr2, $arr1, $arr3);
    print_r($diff);
    echo "<br><br>";

    echo "Comparando Array 3 com as demais: <br>";
    $diff = array_diff($arr3, $arr1, $arr2);
    print_r($diff);
    echo "<br>";

?>