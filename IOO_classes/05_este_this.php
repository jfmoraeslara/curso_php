<?php

    class Animal {

        public $nome;

        function escolherNome($nome) {
            $this->nome = $nome;
        }

        function latir() {
            return "Au au <br>";
        }

        // criar um método com base em outro
        function latirForte() {
            return strtoupper($this->latir());
        }

    }

    $frida = new Animal;

    // não irá imprimir nada sem instanciar
    echo "O nome do animal é: $frida->nome <br>";

    // agora irá imprimir
    $frida->escolherNome("Frida");

    echo "O nome do animal é: $frida->nome <br>";

    echo $frida->latir();
    echo $frida->latirForte();


?>