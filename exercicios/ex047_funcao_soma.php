<?php
    
    function sumDigits ($num) {

        $sum = 0;
        while($num != 0) {
            $sum = $sum + $num % 10;
            $num = $num/10;
        }
        return $sum;

    }

    $result = sumDigits(333);
    echo "A soma dos digitos é: ", $result;

?>