<?php

    function parImpar($num) {
    
        if($num % 2 === 0) {
            echo "O número $num é par! <br>";            
        } else {
            echo "O número $num é impar! <br>";
        }
    }

    parImpar(5);
    parImpar(10);
    parImpar(15);
    parImpar(20);
    parImpar(15);

?>