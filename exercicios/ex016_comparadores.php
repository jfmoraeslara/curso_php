<?php

    // ==, !=, ===, !==

    $a = 2;
    $b = 5;
    $c = 2;
    $d = "João";
    $e = "João";

    echo "Valores: <br>";
    echo "A = 2 <br> B = 5 <br> C = 2 <br> D = João <br> E = João <br><br>";

    echo "Igualdade <br>";
    if($a == $b) {
        echo "A = B <br>";
    }

    if($a == $c) {
        echo "A = C <br>";
    }

    if($d == $e) {
        echo "D = E <br>";
    }
    echo "<br>";

    echo "Diferente <br>";
    if($a != $b) {
        echo "A diferente de B <br>";
    }

    if($a != $c) {
        echo "A diferente de C <br>";
    }

    if($d != $e) {
        echo "D diferente de E <br>";
    }
    echo "<br>";

    echo "Idêntico <br>";
    if($a === $b) {
        echo "A idêntico a B <br>";
    }

    if($a === $c) {
        echo "A idêntico a C <br>";
    }

    if($d === $e) {
        echo "D idêntico a E <br>";
    }
    echo "<br>";

    echo "Não idêntico <br>";
    if($a !== $b) {
        echo "A não idêntico a B <br>";
    }

    if($a !== $c) {
        echo "A não idêntico a C <br>";
    }

    if($d !== $e) {
        echo "D não idêntico a E <br>";
    }
    echo "<br>";

?>