<?php

    function argumentos($a, $b, $c) {

        print_r(func_get_args());

        echo "<br>";
        echo "Números de argumentos: " . func_num_args() . "<br>";
       
    }

    argumentos (2, 4, 6);

?>