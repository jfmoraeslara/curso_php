<?php

    $x = 2;
    $limite = 32;

    while($x < $limite) {
        echo "Executando o loop $x <br>";

            if($x === 16) {
            echo "Terminando o loop em 16 <br>";
            break;
            }

        $x += 2;

    }

?>