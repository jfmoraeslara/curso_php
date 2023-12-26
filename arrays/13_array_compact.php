<?php

    $marca = 'BMW';
    $motor = '3.0';
    $ano = 2020;
    $portas = 4;
    $tetoSolar = true;

    $carro = compact('marca', 'motor', 'ano', 'portas', 'tetoSolar');

    print_r($carro);

?>