<?php

    $nome = "José";
    $idade = 40;
    $cabelo = "preto";
    $olhos = "castanho";

    $pessoa = compact('nome', 'idade', 'cabelo', 'olhos');

    print_r($pessoa);
    echo "<br><br>";

    foreach($pessoa as $caracteristica => $value) {
        echo "$caracteristica: $value <br>";
    }

?>