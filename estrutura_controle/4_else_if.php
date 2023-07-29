<?php

    // no else if o sistema executa a primeira condição verdadeira
    if(10 > 5) {
        echo "Entrou no if <br>";
    } else if(5 > 2) {
        echo "Entrou no else if <br>";
    }

    if(10 < 5) {
        echo "Entrou no if <br>";
    } else if(5 > 2) {
        echo "Entrou no else if <br>";
    }

    if(10 < 5) {
        echo "Entrou no if <br>";
    } else if(5 < 2) {
        echo "Entrou no 2 else if <br>";
    } else if(3 == 3) {
        echo "Entrou no 2 else if <br>";
    }

    if(10 < 5) {
        echo "Entrou no if <br>";
    } else if(5 < 2) {
        echo "Entrou no 2 else if <br>";
    } else if(3 != 3) {
        echo "Entrou no 2 else if <br>";
    } else {
        echo "Entrou no else, última condição <br>";
    }

?>