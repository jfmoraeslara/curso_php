<?php

    $pedro = [
        'nome' => 'Pedro',
        'idade' => 40,
        'profissão' => 'Professor',
    ];

    $ana = [
        'nome' => 'Ana',
        'idade' => 25,
        'profissão' => 'Pedagoga',
    ];

    foreach($pedro as $carac => $value) {
        echo "$carac: $value <br>";
    }

    echo "<br>";

    foreach($ana as $carac => $value) {
        echo "$carac: $value <br>";
    }

?>