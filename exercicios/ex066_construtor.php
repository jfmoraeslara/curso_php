<?php

    class Cachorro {

        public $nome;
        public $idade;
        public $raca;
        public $cor;

       function __construct($nome, $idade, $raca, $cor) {

        $this->nome = $nome;
        $this->idade = $idade;
        $this->raca = $raca;
        $this->cor = $cor;

       }

       public function exibir() {

        echo "Cadastro do seu cachorrinho: <br>";
        echo "Nome : $this->nome <br>";
        echo "Idade : $this->idade <br>";
        echo "Raça : $this->raca <br>";
        echo "Cor : $this->cor <br>";

       }

    }

    $pipoca = new Cachorro("Pipoca", 10, "Vira-lata", "Caramelo");

    $pipoca->exibir();

    echo "<br>";

    // também é possível passar paramêtros

    $nome = "Bob";
    $idade = 8;
    $raca = "Pastor Alemão";
    $cor = "Preto";

    $bob = new Cachorro($nome, $idade, $raca, $cor);    

    $bob->exibir();

?>