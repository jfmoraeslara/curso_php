<?php

$velA = 100;
$velB = 120;
$velC = 140;
$velMax = 120;

echo "Condição 1: ";
if($velA < $velMax) {
    echo "Dentro do limite de velocidade! <br>";
} else if ($velA == $velMax) {
    echo "Cuidado! Você está no limite de velociade <br>";
} else {
    echo "Ultrapassou o limite de velocidade! <br>";
}

echo "Condição 2: ";
if($velB < $velMax) {
    echo "Dentro do limite de velocidade! <br>";
} else if ($velB == $velMax) {
    echo "Cuidado! Você está no limite de velociade <br>";
} else {
    echo "Ultrapassou o limite de velocidade! <br>";
}

echo "Condição 3: ";
if($velC < $velMax) {
    echo "Dentro do limite de velocidade! <br>";
} else if ($velC == $velMax) {
    echo "Cuidado! Você está no limite de velociade <br>";
} else {
    echo "Ultrapassou o limite de velocidade! <br>";
}

?>