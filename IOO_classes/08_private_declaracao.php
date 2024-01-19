<?php

    class Car {

        public $rodas = 4;
        private $vidro = "Sem película";

        public function getVidro() {
            return $this->vidro;
        }

    }

    class Mecanico {

        public function alterarRodas($obj) {
            echo "Quantidade de rodas :";
            $obj->rodas = 5;
        }

        public function colocarPelicula($carro, $pelicula) {
            echo "Tipo de película: ";
            $carro->vidro = $pelicula;
        }

    }

    // proriedades publica
    $carro = new Car;
    echo "Quantidade de rodas: ";
    echo $carro->rodas . "<br>";

    $joao = new Mecanico;
    $joao->alterarRodas($carro);
    echo $carro->rodas . "<br>";

    // Não pode ser alterado por ser privado
    //$joao->colocarPelicula($carro, "G20");
    
    // propriedades privada
    echo $carro->getVidro() . "<br>";

?>