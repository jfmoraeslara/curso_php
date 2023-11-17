<?php

    $carro = "Fiat";
    $valor = 3000.55;
    $parc = 10;

    // %s -> string, %d -> inteiro, %f -> float   
    printf("O carro da marca %s custa R$ %.2f parcelado em %d vezes <br>", $carro, $valor, $parc);

    // função print 
    print("O carro da marca $carro custa R$ $valor parcelado em $parc vezes <br>");

?>