<?php

// valor default ($a = "teste")   
function teste($a = "teste") {
        echo "O valor de A é: $a <br>";
    }

    teste();
    teste("teste 2");

    echo "<br>";
    // o valor obrigatorio (b) deve vir primeiro 
    function testando($b, $a = "x") {
        echo "O valor de A é: $a e o valor de B é: $b <br>";
    }

    testando("1");
    testando("2", "3");        
?>