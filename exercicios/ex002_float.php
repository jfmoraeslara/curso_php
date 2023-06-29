<?php

    $a = 10.5;
    $b = "teste";

    echo $a, "<br>";
    echo 20.5, "<br>";

    if(is_float($a)) {
        echo $a, "<br>";
    }

    if(is_float($b)) {
        echo $b, "<br>";
    }

    else {
        echo "$b não é float";
    }

?>