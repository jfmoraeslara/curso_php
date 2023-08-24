<?php

    // criar uma array de 1 a 20 e dizer quais são pares e impares
    $arr = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

    echo "Numeros pares <br>";
    for($i = 0; $i < count($arr); $i++) {
        if($arr[$i] % 2 == 0) {
            echo "Número: $arr[$i] <br>";
        }        
    }

    echo "<br>";
    echo "Numeros impares <br>";
    for($i = 0; $i < count($arr); $i++) {
        if($arr[$i] % 2 != 0) {
            echo "Número impar: $arr[$i] <br>";
        }        
    }

?>