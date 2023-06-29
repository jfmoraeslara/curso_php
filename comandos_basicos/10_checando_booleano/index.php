<?php

    $a = true;

    echo "Primeira condição <br>";
    if(is_bool($a)){
        echo "É booleano! <br><br>";
    }

    echo "Segunda condição <br>";
    if(is_bool(0)){
        echo "É booleano! <br><br>";
    }

    else {
        echo "Condição falsa! <br><br>";
    }

    echo "Terceira condição <br>";
    if(is_bool(false)){
        echo "É booleano! <br><br>";
    }   

?>