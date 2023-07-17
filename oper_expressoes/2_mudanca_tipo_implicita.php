<?php

    echo 5 / 2;
    echo "<br>";

    if(is_float(5/2)) {
        echo "É float <br><br>";
    }

    // concatenação
    echo 2 . 3;
    echo "<br>";

    if(is_string(2 . 3)) {
        echo "É string <br><br>";
    }

    $nome = "João";
    $sobrenome = "Lara";

    $nomeCompleto = $nome . " " . $sobrenome;

    echo $nomeCompleto;

?>