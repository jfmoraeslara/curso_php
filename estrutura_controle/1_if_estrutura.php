<?php

    if(5 > 2) {
        echo "Deu certo entrou no if 1 <br>";
    }

    if(5 <= 2) {
        echo "Condição falsa não entra no if <br>";
    }

    if(5 <= 5) {
        echo "Deu certo entrou no if 2 <br>";
    }

    // variáveis
    $a = 10;
    $b = 5;    
    $c = "Deu certo entrou no if 3 <br>";

    if($a > $b) {
        echo $c;
    }

?>