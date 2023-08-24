<?php

    // array     
    $arr = [5, "João", 10.5, "Maria", "Pedro", 2, true, false, [], 23.1278];

    // imprimir somentes strings
    $x = count($arr);
    $y = 0;

    while($y < $x) {
        if(is_string($arr[$y])) {
            echo $arr[$y] . "<br>";
        }

        $y++;
    }

?>