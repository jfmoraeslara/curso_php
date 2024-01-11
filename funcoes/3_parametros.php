<?php

    function velocidadeMaxima($vel) {

        // tratamento da função com if
        if(is_int($vel)) {
           echo "Velocidade máxima é $vel km/h <br>"; 
        } else {
            echo "Por favor, passe um número inteiro! <br>";
        }
        
    }

    // é possível passar vários parâmetros
    velocidadeMaxima(200);
    velocidadeMaxima(300);
    velocidadeMaxima(400);
    velocidadeMaxima("quinhentos");

    /* Obs: Não pode passar funções que exigem parâmetros sem parâmetros
    ex: velocidadeMaxima(); */

    // mais parâmetros
    echo "<br>";
    function descreverAnimal($nome, $raca) {
        echo "$nome é da raça $raca <br>";
    }

    descreverAnimal("Pipoca", "Vira lata");
    descreverAnimal("Bob", "Pastor Alemão");

?>