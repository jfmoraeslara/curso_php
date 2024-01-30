<?php

    class Calculadora {

        public $a;
        public $b;
                        
        function somar($a, $b) {
            
            $soma = 0;
            $soma = $a + $b;
            echo "A soma dos valores é: $soma <br>";
            
        }
        
        function subtracao($a, $b) {
            
            $diminuir = 0;
            $diminuir = $a - $b;
            echo "A subtração dos valores é: $diminuir <br>";
            
        }

        function multiplicacao($a, $b) {
            
            $mult = 0;
            $mult = $a * $b;
            echo "A multiplicação dos valores é: $mult <br>";
            
        }  

        function divisao($a, $b) {
            
            $div = 0;
            $div = $a / $b;
            echo "A subtração dos valores é: $div <br>";
            
        }  

    }

    $num = new Calculadora();
    
    $num->somar(10, 5);
    $num->subtracao(10, 5);
    $num->multiplicacao(10, 5);
    $num->divisao(10, 5);

?>