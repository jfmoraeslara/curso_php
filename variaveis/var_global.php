<?php

    // em PHP as variaveis globais não podem ser acessíveis dentro de uma função

    $teste = "asd";

    echo "$teste global 1 <br>";

    if(5 > 2) {
        $teste =  "dsa";
        echo "$teste if <br>";
    }

    echo "$teste global 2 <br>";

    // alterando o global dentro da função
    function testandoGlobal() {
        global $teste;
        $teste = 3;
        echo "$teste função global <br>";
    }

    testandoGlobal();
    echo "$teste global 3 <br>";
?>