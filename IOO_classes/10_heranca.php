<?php

    class Humano {

        public $idade = 42;

        public function falar() {
            echo "Olá mundo! <br>";
        }

        private function gritar() {
            echo "CURSO PHP <br>";
        }

        // para acessar o método private
        public function acessarGritar() {
            $this->gritar();
        }

        protected function falarBaixo() {
            echo "xissssssss <br>";
        }

        // acessar o método protected
        public function acessarFalarBaixo() {
            $this->falarBaixo();
        }

    }

    // herdando método
    class Programador extends Humano {

    }

    $ze = new Humano;
    $ze->falar();
    $ze->acessarGritar();
    $ze->acessarFalarBaixo();
    echo "<br>";

    //herança
    $joao = new Programador;
    echo "Idade: " . $joao->idade . "<br>";
    $joao->falar();
    $joao->acessarGritar();
    $joao->acessarFalarBaixo();
    echo "<br>";

?>