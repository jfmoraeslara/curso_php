<?php

    // contagem das letras a
    $texto = "O rato roeu a roupa do rei de Roma";

    $contadorA = 0;

    for($i=0; $i<strlen($texto); $i++) {
        
        if($texto[$i] === "a") {
            $contadorA++;
        }
    }

    echo "O número de A é de: $contadorA";

?>