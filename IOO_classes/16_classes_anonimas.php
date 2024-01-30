<?php

    // classes anônimas não criadas sem nomes e devem ser fechadas com ;

    $pessoa = new class() {

        public $nome = "João";

        public function dizerNome() {
            echo "Meu nome é $this->nome <br>";
        }

    };

    echo $pessoa->nome . "<br>";

    $pessoa->dizerNome();

?>