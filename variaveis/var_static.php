<?php

    function teste() {
        
        $a = 0;
        $a++;

        echo "$a <br>";

    }

    teste();
    teste();
    teste();

    function testeStatic() {
        // mantem o valor único (incremento e decremento)
        static $a = 0;
        $a++;

        echo "$a <br>";

    }

    testeStatic();
    testeStatic();
    testeStatic();

?>