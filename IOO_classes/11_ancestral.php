<?php

    class Humano {

    }

    class Animal {

    }

    class Professor extends Humano {

    }

    $marcos = new Humano;

    $pipoca = new Animal;

    
    if($marcos instanceof Humano) {
        echo "Marcos é um humano! <br>";
    } else {
        echo "Marcos não é um humanos! <br>";
    }

    if($pipoca instanceof Humano) {
        echo "Pipoca é um animal! <br>";
    } else {
        echo "Pipoca não é um animal! <br>";
    }
    
    if($pipoca instanceof Animal) {
        echo "Pipoca é um animal! <br>";
    } else {
        echo "Pipoca não é um animal! <br>";
    }

    echo "<br>";

    echo "Classe Professor herdando propriedades da classe Humnao <br>";

    $pedro = new Professor;

    if($pedro instanceof Professor) {
        echo "Pedro é um professor! <br>";
    } else {
        echo "Pedro não é um professor! <br>";
    }

    if($pedro instanceof Humano) {
        echo "Pedro é um humano! <br>";
    } else {
        echo "Pedro não é um humano! <br>";
    }

?>