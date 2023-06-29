<?php

    echo NULL;

    $nome = null;

    if(is_null($nome)) {
        echo "O valor é nulo!";
    }

    echo "<br><br>";

    // valor não nulo!
    $nome = "João";

    if(is_null($nome)) {
        echo "O valor é nulo!";
    }

    else {
        echo "$nome";
    }

?>