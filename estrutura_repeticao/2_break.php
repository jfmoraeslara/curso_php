<?php

    $x = 0;

    while($x < 10) {
        echo "O X é $x <br>";

        // terminando o loop
        if($x === 5) {
            echo "Terminando o loop em 5 <br>";
            break;
        }

        $x++;
    }

    echo "Saiu do loop <br>";

?>