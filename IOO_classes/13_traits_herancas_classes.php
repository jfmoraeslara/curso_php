<?php

    trait Objeto {

        public $y= 10;

        public function teste() {
            echo "Testendo trait de objeto <br>";
        }

    }

    trait Testando {

public function traitTestando() {
    echo "Este método é da trait testando <br>";
}

    }

    class Central {

        use Objeto;
        use Testando;

    }

    $x = new Central;

    $x->teste();
    $x->traitTestando();
    echo $x->y . "<br>";

?>