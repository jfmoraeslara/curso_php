<?php

class Humano {

    // constantes os valores não mudam
    public const OLHOS = 2;
    public const BRACOS = 2;
    public const PERNAS = 2;

    //outra forma de acessar a constante através de uma função
    function mostrarConstante() {
        echo self::BRACOS . "<br>";
    }

}

$joao = new Humano;

echo "Olhos: " . $joao::OLHOS . "<br>";
echo "Braços: " . $joao::BRACOS . "<br>";
echo "Pernas: " . $joao::PERNAS . "<br>";

// acessando pela função
echo "Acessando constante pela função: ";
$joao->mostrarConstante();
echo "<br>";

?>