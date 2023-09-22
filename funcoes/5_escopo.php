<?php

    $a = 10;
    $b = 15;

    $b++;

    function testeEscopo() {

        $a = 5;

        static $c = 0;
        $c++;

        echo "ESCOPO LOCAL DE A: $a <BR>";
        echo "ESCOPO STATIC DE C: $c <BR>";

    }

    echo "ESCOPO GLOBAL DE A: $a <BR>";   

    testeEscopo();

    // imprimir duas vezes a função
    echo "<br>";
    echo "ESCOPO GLOBAL DE B: $b <BR>";   
    testeEscopo();

?>