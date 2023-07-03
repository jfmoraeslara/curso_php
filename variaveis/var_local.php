<?php
    // escopo global
    $x = 10;

    echo "$x global <br>";

    // escopo local
    function teste() {
        $x = 5;

        echo "$x local <br>";
    }

    teste();
    echo "$x global <br>";

    echo "<br>";

    function novoteste() {
        $x = 12;

        echo "$x novo local <br>";
    }

    $x = 99;

    novoteste();

    teste();

    echo "$x global <br>";

?>