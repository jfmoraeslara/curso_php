<?php

    echo "Primeira condição <br>";
    echo true;
    echo "<br><br>";
    echo false;
    
    echo "Segunda condição <br>";
    if(true) {        
        echo "É verdadeiro! <br><br>";
    }
    
    echo "Terceira condição <br>";
    if(5 > 2) {
        echo "É verdadeiro! <br><br>";
    }

    echo "Quarta condição <br>";
    if(2 > 5) { // falso        
        echo "É verdadeiro! <br><br>";
    }
    
    else {
        echo "Condição falsa!";
    }
    
?>