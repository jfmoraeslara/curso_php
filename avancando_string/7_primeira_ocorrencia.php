<?php

    $str = "Estamos testando o método strpos, com o strpos podemos encontrar strings";

    //escolher a primeira ocorrência strings
    $testeEncontrar = strpos($str, "strpos");

    echo "$testeEncontrar <br>";

    // caso não exista a palavra desejada, indicar falso
    $testeEncontrar2 = strpos($str, "Java");

    echo "$testeEncontrar2 <br>";

    if($testeEncontrar2 === false) {
        echo "Palavra não encontrada <br>";
    }

?>