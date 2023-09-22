<?php

    function defineCorCarro($cor) {
        return "A cor do carro é: $cor";
    }

    $carroVermelho = defineCorCarro("Vermelho");
    echo $carroVermelho . "<br>";

    $carroAzul = defineCorCarro("Azul");
    echo $carroAzul . "<br>";

?>