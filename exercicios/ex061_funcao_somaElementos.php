<?php

function somaElementos() {    

// 5, 2, 9, 10
    $arr = [5, 2, 9, 10];

    if($arr == []) {
        echo "Digite um elemento na array! <br>";
    } else {
        $soma = array_sum($arr);
        echo "Soma dos elementos é: $soma <br>";
    }

}
somaElementos();

?>