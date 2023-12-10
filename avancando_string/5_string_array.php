<?php

    $frase = "Testando o explode";

    // delimitador elemento espaço
    $fraseArray = explode(" ", $frase);

    print_r($fraseArray);
    echo "<br>";

    $frase2 = "Maria, José, Pedro, Carlos, Fábio";

    // delimitador elemento virgula
    $fraseArray2 = explode(",", $frase2);

    print_r($fraseArray2);
    echo "<br><br>";

    // estrutura de repetição
    for($i = 0; $i < count($fraseArray2); $i++) {
        echo "$fraseArray2[$i] <br>";
    }

?>