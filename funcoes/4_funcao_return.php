<?php

    function soma($n1, $n2) {
        return $n1 + $n2;
    }

    echo soma(4, 4) . "<br>";

    $x = soma(5, 5);
    echo "Valor de x: $x <br>";

    $y = soma($x, 10);
    echo "Valor de y: $y <br>";

    function testeRetorno() {
        return "Testando";
    }

    $z = testeRetorno();
    echo $z . "<br>";

?>