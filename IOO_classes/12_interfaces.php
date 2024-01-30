<?php

    interface Caracteristicas {

        const nome = "João";

        const idade = 42;
                
    }

    class Humano implements Caracteristicas {
        
        public function idade() {
           echo "Idade = " . self::idade . "<br>";
        }

        public function falar() {
            echo "Olá povo! <br>";
        }

        public function nome() {
            echo "Nome: " . self::nome . "<br>";
        }

    }

    $joao = new Humano;

    $joao->falar();
    $joao->nome();
    $joao->idade();

?>