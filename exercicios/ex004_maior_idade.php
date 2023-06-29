<?php

    $pessoa = [
        "nome" => "João",
        "sobrenome" => "Fernando",
        "sexo" => "M",
        "idade" => 20
    ];

    if($pessoa["idade"] >= 18) {
        echo "Maior de idade";
    }

    else {
       echo "Menor de idade";
    }

?>