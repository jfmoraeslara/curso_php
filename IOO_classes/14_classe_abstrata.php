<?php

    abstract class Teste {

        public static function testandoClasse() {
            echo "Este é um método de uma classe abstrata <br>";
        }

        abstract public function testeAbs();

    }

    // classe abstratas deve cuidar na hora de instanciar
    Teste::testandoClasse();

    class Nova extends Teste {

        public function testeAbs()
        {
            echo "Teste método abstrato Abs <br>";
        }

    }

    $n = new Nova;
    $n->testeAbs();

?>