<?php

    /*
    AND: &&
    OR: ||
    NOT: !
    */
    
    // operador AND (e)
    if(5 > 10 && 10 > 5) { // false e true
        echo "Imprime if 1 <br>";
    }

    if(50 > 10 && 10 > 5) { // true e true
        echo "Imprime if 2 <br><br>";
    }

    // operador OR (ou)
    if(5 > 10 || 10 > 5) { // false e true
        echo "Imprime if 3 <br>";
    }

    if(50 > 10 || 10 > 5) { // true e true
        echo "Imprime if 4 <br><br>";
    }

    // operador NOT (negação)
    if(!(5 > 10)) {
        echo "A operação é falsa <br>";
    }

    if(!(50 > 10)) {
        echo "A operação é falsa <br>";
    }



?>