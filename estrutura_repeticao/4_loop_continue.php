<?php

    $a = 10;

    while($a > 0) {        

        if($a == 5 || $a == 7) {
            echo "Pulou a execução $a <br><br>";
            $a--;
            continue;
        }

        if($a == 2) {
            echo "Parando a execução em 2 <br>";
            break;
        }

        echo "Executando o loop $a <br>";
        $a--;
    }   

?>