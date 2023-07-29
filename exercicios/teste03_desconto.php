<?php

    function calcularDesconto($categoria, $din) {
        $a = "eletrônicos";
        $b = "vestuário";
        $c = "alimentos";        
        
        if($categoria == $a) {
            $din -= $din * 0.1;
            echo "R$ " . $din . "<br>";
            return;      
        }

        if($categoria == $b) {
            $din -= $din * 0.2;
            echo "R$ " . $din . "<br>";
            return;
        }

        if($categoria == $c) {
            $din -= $din * 0.05;
            echo "R$ " . $din . "<br>";
            return;
        }

        else {
            $din;
            echo "R$ " . $din . "<br>";
            return;
        }
    }

    calcularDesconto("eletrônicos", 1000.00);
    calcularDesconto("vestuário", 1000.00);
    calcularDesconto("alimentos", 1000.00);
    calcularDesconto("computador", 1000.00);
    
?>