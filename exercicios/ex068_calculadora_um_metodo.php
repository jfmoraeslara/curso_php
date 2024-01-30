<?php

class Calculadora {

    public $a;
    public $b;
                    
    function number($a, $b) {
        
        $a and $b;
        echo "Primeiro número: $a <br>";
        echo "Segundo número: $b <br><br>";

        echo "A soma dos valores é: " . $a + $b . "<br>";
        echo "A subtração dos valores é: " . $a - $b . "<br>";
        echo "A multiplicação dos valores é: " . $a * $b . "<br>";
        echo "A divisão dos valores é; " . $a / $b . "<br>";
        
    }
    
}

$num = new Calculadora();

$num->number(10, 5);

?>