<?php

    class Pessoa {

        function falar() {
            echo "Olá mundo! <br>";
        }

        function somar($x, $y){
            echo $x + $y . "<br>";
        }

    }

    $joao = new Pessoa;
    $joao->falar();

    $maria = new Pessoa;
    $maria->falar();

    $joao->somar(2, 2);
    $maria->somar(5, 5);

?>