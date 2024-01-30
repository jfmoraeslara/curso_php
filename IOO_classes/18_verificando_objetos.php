<?php

    class Humano {

        public function falar() {
            echo "Olá!";
        }
    }

    $joao = new Humano;

    $teste = 10;

    if(is_object($joao)) {
        echo "É um objeto <br>";
    } else {
        echo "Não é um objeto! <br>";
    }

    if(is_object($teste)) {
        echo "É um objeto <br>";
    } else {
        echo "Não é um objeto! <br>";
    }

    // identificar a classe do objeto
    echo get_class($joao) . "<br>";

    // verificar no objeto $joao se existe o método falar
    if(method_exists($joao, "falar")) {
        echo "Método existe <br>";
    } else {
        echo "Método não existe <br>";
    }

    if(method_exists($joao, "aasssd")) {
        echo "Método existe <br>";
    } else {
        echo "Método não existe <br>";
    }

?>