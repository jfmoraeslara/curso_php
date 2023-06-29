<?php

// quando se tem um array muito grande pode-se escrever a array dentro []   
$carro = [
    "marca" => "BMW",
    "rodas" => "aro 19",
    "teto_solar" => true,
    "velocidade_max" => 200,
    "blindado" => false
];

print_r($carro);

$marca = $carro["marca"];
$velocidade_max = $carro["velocidade_max"];

echo "<br>";

echo "O carro é da marca $marca e atinge a velocidade máxima de $velocidade_max km/h";

?>