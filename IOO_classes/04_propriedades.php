<?php

    class Car {

        public $rodas = 4;
        public $aro = 20;
        public $cor = "amarela";

    }

    // instanciando propriedades
    $ferrari = new Car;

    echo "rodas: " . $ferrari->rodas . "<br>";
    echo "aro: " . $ferrari->aro . "<br>";

    //  alterando propriedade
    $ferrari->cor = "vermelha";
    echo "cor: " . $ferrari->cor . "<br>";
