<?php

    function compararNumeros($a, $b) {
        if($a > $b) {
            echo "O primeiro número é maior. <br>";
            return;
        }
        if($b > $a) {
            echo "O segundo número é maior. <br>";
            return;
        } else {
           echo "Os números são iguais. <br>";
           return;
        }
   }

compararNumeros(10,5);
compararNumeros(5,10);
compararNumeros(10,10);

?>