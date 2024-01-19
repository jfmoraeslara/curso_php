<?php

    class Car {

        public $marca;
        public $cor;
        public $porta;
        public $aro;
        public $velocidadeMaxima;

        function setVelocidadeMaxima($vel) {
            $this->velocidadeMaxima = $vel;           
        }

        function getVelocidadeMaxima() {
           echo "A velocidade máxima do carro é de  $this->velocidadeMaxima km/h.<br><br>";
        }
            
    }

    $ferrari = new Car;

    $ferrari->marca = "Ferrari";    
    $ferrari->cor = "Vermelha";
    $ferrari->porta = 2;
    $ferrari->aro = 20;
    $ferrari->setVelocidadeMaxima(200);

    echo "Marca: $ferrari->marca <br>";
    echo "Cor: $ferrari->cor <br>";
    echo "Porta: $ferrari->porta <br>";
    echo "Aro: $ferrari->aro <br>";
    $ferrari->getVelocidadeMaxima();

    $bmw = new Car;

    $bmw->marca = "BMW";    
    $bmw->cor = "Azul";
    $bmw->porta = 4;
    $bmw->aro = 18;
    $bmw->setVelocidadeMaxima(150);

    echo "Marca: $bmw->marca <br>";
    echo "Cor: $bmw->cor <br>";
    echo "Porta: $bmw->porta <br>";
    echo "Aro: $bmw->aro <br>";
    $bmw->getVelocidadeMaxima();

?>