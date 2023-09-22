<?php

    function sumEvenNumbers($num) {
        
        $soma = 0;
        for($i=0; $i<=$num; $i++) {            
            if($i % 2 === 0) {                
                echo "O número $i é par! <br>";
                $soma += $i;                           
            }                                             
        }
        echo "Soma = $soma <br>";                       
    }  
    
    $num = 12;
    sumEvenNumbers($num);

?>