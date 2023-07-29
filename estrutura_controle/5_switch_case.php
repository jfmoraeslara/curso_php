<?php

    $x = 1;
    $y = "João";
    $z = "Marcos";

    // no switch usa-se o break para finalizar o processoa apos execução
    switch($x) {
        case 0:
            echo "X igual a 0 <br>";
            break;
        case 1:
            echo "X igual a 1 <br>";
            break;
        case 2:
            echo "X igual a 2 <br>";
            break;
        case 3:
            echo "X igual a 3 <br>";
            break;
    }

    switch($y) {
        case "Ana":
            echo "Y igual a Ana <br>";
            break;
        case "Maria":
            echo "Y igual a Maria <br>";
            break;
        case "Pedro":
            echo "Y igual a Pedro <br>";
            break;
        case "Carlos":
            echo "Y igual a João <br>";
            break;
        case "João":
            echo "Y igual a João <br>";
            break;             
    }
    
    // usando default
    switch($z) {
        case "Ana":
            echo "Z igual a Ana <br>";
            break;
        case "Maria":
            echo "Z igual a Maria <br>";
            break;
        case "Pedro":
            echo "Z igual a Pedro <br>";
            break;
        case "Carlos":
            echo "Y igual a João <br>";
            break;
        default:
            echo "Nome não identificado <br>";             
    }   

?>