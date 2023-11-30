<?php

    /* 
    trim - limpa espaços antes e depois da string
    ltrim - limpa espaços da parte inicial (left) da string
    rtrim - limpa espaços da parte final (right) da string
    */

    $str1 = "      João   ";

    echo "Esta é a string 1: $str1. <br>";

    $str1limpa = trim($str1);
    echo "Esta é a string 1: $str1limpa. <br>";

    $str1limpa2 = rtrim($str1);
    echo "Esta é a string 1: $str1limpa2. <br>";

    $str1limpa3 = ltrim($str1);
    echo "Esta é a string 1: $str1limpa3. <br>";

?>