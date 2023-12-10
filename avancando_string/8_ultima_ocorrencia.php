<?php

    $str = "Estamos testando o método strrpos, com o strrpos podemos encontrar strings";

    //escolher a última ocorrência strings
    echo "Última ocorrência: ";
    $testeEncontrar = strrpos($str, "strrpos");

    echo "$testeEncontrar <br><br>";

    //diferença entre a primeira ocorrência strings
    echo "Primeira ocorrência: ";
    $testeEncontrar = strpos($str, "strrpos");

    echo "$testeEncontrar <br>";

?>