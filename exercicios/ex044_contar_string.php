<?php

    function countVowels($string) {
        $vowels = ['a', 'e', 'i', 'o', 'u'];
        $count = 0;

        echo "Valor digitado: $string <br>";

        for ($i = 0; $i < strlen($string); $i++) {
            $char = strtolower($string[$i]);
            if (in_array($char, $vowels)) {
                $count++;
            }
        }
        return "Números de vogais: $count <br>";
    }
    
    echo countVowels("Joselito");
       
?>