<?php

    class Humano {

        // propriedades
        public $idade;
        public $nome;
        public $profissão;

        // métodos
        public function falar() {

        }

        public function andar() {
            
        }

    }

    if(class_exists("Humano")) {
        echo "A classe existe! <br>";
    }

    if(class_exists("Cachorro")) {
        echo "A classe existe! <br>";
    } else {
        echo "A classe NÃO existe! <br>";
    }

    print_r(get_class_vars("Humano"));
    echo "<br>";

    print_r(get_class_methods("Humano"));
    echo "<br>";

?>