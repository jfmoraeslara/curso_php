<?php

    $arr = range(1, 20);

    // dividindo a array em arrays de 4 elementos 
    print_r(array_chunk($arr, 4));
    echo "<br><br>";

    $arrays = array_chunk($arr, 10);
    print_r($arrays);
    echo "<br><br>";

    print_r($arrays[1]);
    echo "<br><br>";

?>