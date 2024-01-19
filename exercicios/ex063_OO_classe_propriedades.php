<?php

    class Pessoa {

        public $nome;
        public $idade;

        function andar($m) {
            echo "A pessoa andou $m metros <br>";
        }

    }

    $joao = new Pessoa;

    $joao->nome = "João";
    $joao->idade = 42;

    echo "Nome: $joao->nome <br>";
    echo "Idade: $joao->idade <br>";

    $joao->andar(20);
    echo "<br>";

    $pedro = new Pessoa;

    $pedro->nome = "Pedro";
    $pedro->idade = 25;

    echo "Nome: $pedro->nome <br>";
    echo "Idade: $pedro->idade <br>";

    $pedro->andar(50);

?>