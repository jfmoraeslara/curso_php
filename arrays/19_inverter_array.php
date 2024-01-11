<?php

    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    $arrRev = array_reverse($arr);

    echo "Array original <br>";
    print_r($arr);
    echo "<br><br>";

    echo "Array reverso <br>";
    print_r($arrRev);
    echo "<br><br>";

    $arr2 = ['João', 'Maria', 'José', 'Pedro', 'Anna'];

    $arrRev2 = array_reverse($arr2);

    echo "Array original <br>";
    print_r($arr2);
    echo "<br><br>";

    echo "Array reverso <br>";
    print_r($arrRev2);
    echo "<br><br>";

?>